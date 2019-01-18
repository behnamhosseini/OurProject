<html>
<head></head>
<body>
 <img src="{{auth()->user()->posts()->get()->where('id',2)->first()->imageUrl}}">
</body>
</html>