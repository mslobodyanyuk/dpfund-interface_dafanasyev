Design Pattern ►[ Interface ] ► Lesson #4
=========================================

* ***Actions on the deployment of the project:***

- Making a new project dpfund-interface_dafanasyev.loc:
																	
	sudo chmod -R 777 /var/www/DESIGN_PATTERNS/Fundamental/dpfund-interface_dafanasyev.loc

	//!!!! .conf
	sudo cp /etc/apache2/sites-available/test.loc.conf /etc/apache2/sites-available/dpfund-interface_dafanasyev.loc.conf
		
	sudo nano /etc/apache2/sites-available/dpfund-interface_dafanasyev.loc.conf

	sudo a2ensite dpfund-interface_dafanasyev.loc.conf

	sudo systemctl restart apache2

	sudo nano /etc/hosts

	cd /var/www/DESIGN_PATTERNS/Fundamental/dpfund-interface_dafanasyev.loc

- Deploy project:

	`git clone << >>`
	
	`or Download`
	
	_+ Сut the contents of the folder up one level and delete the empty one._

	`composer install`
---

Dmitry Afanasyev

[Design Pattern ►[ Interface ] ► Lesson #4 (13:28)]( https://www.youtube.com/watch?v=CqA83C7dEqw&list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&index=4&ab_channel=DmitryAfanasyev )

The "Interface" Design Pattern does not mean a `PHP interface` that needs to be implemented in a class, but a certain class that serves as a wrapper for the hidden work of another class or group of classes.
The "Interface" Design Pattern is a type of design patterns that include such patterns as - `Facade`, `Adapter`, `Delegation`, `Composite`, `Bridge`, etc.

	composer create-project --prefer-dist laravel/laravel
	
_+ Сut the contents of the folder up one level and delete the empty one._

	php artisan make:controller FundamentalPatternsController

Error: 
_"... Permission denied"_

	sudo chmod -R 777 /var/www/DESIGN_PATTERNS/Fundamental/dpfund-interface_dafanasyev.loc

Error: 
_"Target class [FundamentalPatternsController] does not exist."_
		
<https://stackoverflow.com/questions/63807930/target-class-controller-does-not-exist-laravel-8>		
		
Add route in `routes/web.php`:

```php
use App\Http\Controllers\FundamentalPatternsController;

Route::get('/', [FundamentalPatternsController::class, 'InterfacePattern'])->name('dump');
```

![screenshot of sample]( https://github.com/mslobodyanyuk/dpfund-interface_dafanasyev/blob/main/public/images/firefox1.png )

[(0:05)]( https://youtu.be/CqA83C7dEqw?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=5 ) In this video, we will study another, rather controversial Pattern called `Interface`. Controversial as to why, is not described clearly enough in Wikipedia.
There were NO descriptions on different YOUTUBE channels and so on ... And there are also Examples in Wikipedia (- was at that time) that lead to "far away" and DO NOT correspond to reality ...

[(1:10)]( https://youtu.be/CqA83C7dEqw?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=70 )

<https://ru.wikipedia.org/wiki/Шаблон_проектирования>

The `Interface` Design Pattern is Fundamental. It is difficult to find an understanding of what it is, and it is easy to get confused. (- "Gang of 4" did NOT describe the Fundamental Patterns. )

[(2:10)]( https://youtu.be/CqA83C7dEqw?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=130 )

<https://ru.wikipedia.org/wiki/Интерфейс_(шаблон_проектирования)>

_"Interface - the main Design Pattern, which is a common method for structuring computer programs in order to make them easier to understand."_ - Immediately the thought appears that this is probably still a `PHP Interface`.

[(2:35)]( https://youtu.be/CqA83C7dEqw?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=155 ) 

<https://www.php.net/manual/ru/language.oop5.interfaces.php> 

It Sets the standardization, it "says" there is such a standard for some types of objects. IF you want to Implement your Class, IF you adhere to this standard, make `implements` of this Interface, then EVERYTHING will be fine - you can substitute in your system ... - IF the Class has an Interface,
you can look and already understand what he does. It's easy enough to understand what a Class does and what it's for by looking at the Interface.

[(3:25)]( https://youtu.be/CqA83C7dEqw?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=205 ) And when we read in Wikipedia, we understand that they probably lead to "this", BUT NO.

Farther:

_"In general, an Interface is a class that provides a simple or more program-specific way for the programmer to access other classes."_

And this is where the crux of the matter begins...

[(4:55)]( https://youtu.be/CqA83C7dEqw?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=295 )In fact, this is already the definition of an Interface. Here we can understand that the Interface means NOT this Entity( - from
[PHP Interface]( https://www.php.net/manual/ru/language.oop5.interfaces.php ) ),
this is NOT about the `Interface` Design Pattern. BUT, the first line is starting to get a little confusing. We look at the code, the one who wrote it thought for 6 seconds... - This is NOT correct, it is misleading. This Example needs to be in another topic - in `PHP Interface`.
And then, this example is very bad ...

[(6:10)]( https://youtu.be/CqA83C7dEqw?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=370 )

_"An interface can contain a set of objects and provide simple, high-level functionality for the programmer( for example, the `Facade` Pattern );"_ - This is also an important nuance that the `Interface` Design Pattern does NOT mean `PHP Interface`,
which we have to Implement, namely a certain Class that provides more High Level Functionality. - What does this mean? What is High Level Functionality when you have some kind of Class. For example in `Laravel` I installed `Debugbar`.
In this case, it provides me with an Interface when I want to Print `Messages`, I do `Debugbar::info()`. - And what happens there does NOT bother me, it is quite possible that there are 10 Classes that work together harmoniously and Output information. - In this case `Debugbar`
Implements the Design Pattern `Interface`. "He gave me one small lever, I pull it and get some work, and this work is done by many other objects that I don't care about, I don't care."

I have a car, I have a gas pedal, when I press it, a lot of work happens. Many Classes do something and the result is the same, but there are many workers. I don't care how it's set up. - EVERYTHING, I have this `High Level Interface`.

[(8:10)]( https://youtu.be/CqA83C7dEqw?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=490 ) We get that the `High-Level Interface` is a kind of Class that contains many Classes inside and unifies their work. - He combines a bunch of different methods into one method.
You call, and there, in a chain, other methods are called, some kind of business logic occurs, some kind of processing. In this case, you should also specify that this is a Design Pattern type. Because Design Patterns that work according to this Scheme
a lot And also this can be seen by reading further.

[(8:55)]( https://youtu.be/CqA83C7dEqw?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=535 ) - These are Design Pattern `Facade`, `Adapter`, `Delegation`, `Composite`, `Bridge`. They implement these principles in themselves, each with its own nuances,
each for some specific needs and Tasks, and this is our general way of such an Abstraction. ALL of this is `Interface`, it is a generic type.

When you are developing some Application and you, for example, have chosen for yourself - so I have a certain Task and the `Facade` Design Pattern is suitable for its Implementation. You need to specifically describe that this is a `Facade` and NOT an `Interface` Design Pattern.

[(10:15)]( https://youtu.be/CqA83C7dEqw?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=615 ) 
_"Let's go for examples"_

In the last video we studied the `Event Channel` Design Pattern, I Created a Class
[EventChannel.php]( https://github.com/mslobodyanyuk/dpfund-eventchannel_dafanasyev/blob/main/app/DesignPatterns/Fundamental/EventChannel/Classes/EventChannel.php ), with the help of this Class, I showed you how it EVERYTHING works.
This is item->`run()`; for me there is `Interface`. Here is this "small lever" `run()`, I call it - "the lever turned over", and inside I have such a `Big Job`
[( - EventChannelJob.php)]( https://github.com/mslobodyanyuk/dpfund-eventchannel_dafanasyev/blob/main/app/DesignPatterns/Fundamental/EventChannel/Classes/EventChannelJob.php ) produced by different objects, different classes.
Together they "grappled" harmoniously, worked harmoniously, gave me some information. Here is an Example of High Level Programming where I Abstracted from many Classes, from the "Big Job".
Called ONLY one method. - It does NOT matter to me, in this case, to demonstrate what is inside. It was important for me to show it from the outside.

- `Event Channel`

[EventChannel.php]( https://github.com/mslobodyanyuk/dpfund-eventchannel_dafanasyev/blob/main/app/DesignPatterns/Fundamental/EventChannel/Classes/EventChannel.php )

[EventChannelJob.php]( https://github.com/mslobodyanyuk/dpfund-eventchannel_dafanasyev/blob/main/app/DesignPatterns/Fundamental/EventChannel/Classes/EventChannelJob.php )

I showed, on one line I created the object, on the other line I called the `run()` method.

```php
$item = new EventChannel();
$item->run();
```

In this case, it is the Implementation of the so-called `Interface`.

[(11:30)]( https://youtu.be/CqA83C7dEqw?list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&t=690 ) Also, in Wikipedia there was a reference to the `Delegation` Design Pattern which we have already gone through. - And "here" we have the same thing.
[FundamentalPatternsController.php]( https://github.com/mslobodyanyuk/dpfund-delegation_dafanasyev/blob/main/app/Http/Controllers/FundamentalPatternsController.php ) - We have a certain Class of a Higher Level,
`AppMessenger.php` which internally uses Lower Level Classes. Those classes, they ONLY "live" inside it and they are NOT needed anywhere else. We don't see it, we don't care. We turned to him, we know that he is capable of
do the job, he does. He hid it in himself, he Implemented a Design Pattern, which belongs to a common type called the `Interface` Design Pattern.

- `Delegation`

[FundamentalPatternsController.php]( https://github.com/mslobodyanyuk/dpfund-delegation_dafanasyev/blob/main/app/Http/Controllers/FundamentalPatternsController.php )

#### Useful links:

Dmitry Afanasyev

[Design Pattern ►[ Interface ] ► Lesson #4]( https://www.youtube.com/watch?v=CqA83C7dEqw&list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&index=4&ab_channel=DmitryAfanasyev )

<https://stackoverflow.com/questions/63807930/target-class-controller-does-not-exist-laravel-8>

<https://ru.wikipedia.org/wiki/Шаблон_проектирования>

<https://ru.wikipedia.org/wiki/Интерфейс_(шаблон_проектирования)>

<https://www.php.net/manual/ru/language.oop5.interfaces.php> 

- `Event Channel`

<https://github.com/mslobodyanyuk/dpfund-eventchannel_dafanasyev/blob/main/app/DesignPatterns/Fundamental/EventChannel/Classes/EventChannel.php>

<https://github.com/mslobodyanyuk/dpfund-eventchannel_dafanasyev/blob/main/app/DesignPatterns/Fundamental/EventChannel/Classes/EventChannelJob.php>

- `Delegation`

<https://github.com/mslobodyanyuk/dpfund-delegation_dafanasyev/blob/main/app/Http/Controllers/FundamentalPatternsController.php>