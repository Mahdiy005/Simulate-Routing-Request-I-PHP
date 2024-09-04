in class Routs.php -> line 27 `return call_user_func($target);`
if you don't use return yo must uncommite `exit()` function 
code when call function addRgister -> that because to not 
execute any code after add new route if not do this will throw
Exception each time
