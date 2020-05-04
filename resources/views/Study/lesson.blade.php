<style>

.nav_section {
    background-color:#eeeeee;
    line-height:30px;
    height:300px;
    width:100px;
    float:left;
    padding:5px;
}
.active {
    font-weight:bold;
}
.section {
    width:350px;
    float:left;
    padding:10px;
}

</style>
@extends('layouts.app')


@section('content')


<div class="nav_section">
   <ul>
       <li><a href="#section-london">London</a></li>
       <li><a href="#section-paris">Paris</a></li>
   </ul>
</div>
<div id="section-london" class="tab-content">
   <h2>London</h2>
   <p>London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
</div>
<div id="section-paris" class="tab-content">
   <h2>Paris</h2>
   <p>Paris, France's capital, is a major European city and a global center for art, fashion, gastronomy and culture. Its picturesque 19th-century cityscape is crisscrossed by wide boulevards and the River Seine. </p>
</div>
    
@endsection


<script>
   $(document).ready(function () {
    $('.nav ul li:first').addClass('active');
    $('.tab-content:not(:first)').hide();
    $('.nav ul li a').click(function (event) {
        event.preventDefault();
        var content = $(this).attr('href');
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
        $(content).show();
        $(content).siblings('.tab-content').hide();
    });
});
</script>