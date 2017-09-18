
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js"></script>
<script>
$(function() {
$.fn.hoverfade = function() //wrap our plugin codes in jquery function property.
{
    $(this).fadeTo("fast", 0.30); // on load, reduce element(this) opacity to 30%

    this.mouseenter(OnEnter).mouseleave(OnLeave); //On mouseenter / mouseleave, call our functions

        function OnEnter() //Executes on mouseenter
    {
        $(this).fadeTo("fast", 1); //Bring opacity back to 100%
    }
    function OnLeave() //Executes on mouseleave
    {
        $(this).fadeTo("fast", 0.30); //recude opacity to 30%
    }
}
})
</script>
<script type="text/javascript">
$(document).ready(function() {
  $('.fader').hoverfade();
});
</script>
<style>
.fader{float:left;margin:10px;}
</style>
</head>
<body>
<div class="fader"><p>Blackforest<p><img src="blackforest.jpg" id="image" width="300" height="200"></p> made with layers of chocolate cake, chocolate, cherry and whipped cream.<p></div> 
<div class="fader"><p>Fruitcake<p><img src="fruit-cake.jpg"id="image" width="300" height="200"></p>has low flour content and contain lots of mixed dried fruit<p></div>
<div class="fader"><p>Banana cake<p><img src="banana cake.jpg" id="image" width="300" height="200"></p>made with mashed fully ripe bananas<p></div> 
<div class="fader"><p>Coffeecake<p><img src="coffee cake.jpg"d="image" width="300" height="200"></p>cinnamon-flavored, with a drizzled white icing or crumb topping <p></div>
<div class="fader"><p>Redvelvet<p><img src="red velvet.jpg"id="image" width="300" height="200"></p>cake with either a dark red, bright red or red-brown color. <p></div>
<div class="fader"><p>Whiteforest<p><img src="whiteforest.jpg"id="image" width="300" height="200"></p>chocolate sponge layered with cream and cherries<p></div>
<div class="fader"><p>Chocolate-fudge cake<p><img src="chocolate fudge cake.jpg"id="image" width="300" height="200"></p>single-layer chocolate cake served with or without icing<p></div>
<div class="fader"><p>Blueberry cake<p><img src="blueberry-cake.jpg"id="image" width="300" height="200"></p>cake that contains blueberries<p></div>
</body>
</html>
