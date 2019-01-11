<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class CalculateAccountCompletion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     * @throws \Exception
     */
    public function handle($request, Closure $next)
    {
        if(auth()->check())
        {

            if(cache()->has('accountCompletion'))
            {
//                $accountCompletion = 'accountCompletion';
            } else {
                $result = $this->calculateAccountCompletion();
                cache(['accountCompletion', $result], now()->addMinutes(5));
            }
        }
        return $next($request);
    }

    public function calculateAccountCompletion()
    {
        //compose all the views....

            view()->composer('*', function ($view) {
                $user = User::where('id', Auth::user()->id)->get()->first();
                $user = array_except($user, ['id', 'created_at', 'updated_at', 'email_verified_at', 'badges', 'notifyBirthdays',
                    'accountType', 'whoCanFollow', 'level', 'inRellWith', 'dateOfBirth']);
                $completion = 0;
                $total = '';
                $user = $user->toArray();
                foreach ($user as $element) {

                    if (is_array($element)) {
                        foreach ($element as $el) {
                            $total++;
                            if (!$el == '') {
                                $completion++;

                            }
                        }

                    } else {
                        $total++;
                        if (!$element == '') {
                            $completion++;
                        }
                    }
                }

                $result = floor(($completion / $total) * 100);
                //...with this variable
                $view->with('accountCompletion', $result);
            });
        }

}
