<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
</head>
<center>
<h1> MENU </h1>
<nav>
<ul>
      <a href="{{ route('dashboard')}}">DASHBOARD ||</a>
      <a href="{{ route('reservations')}}">RESERVATIONS ||</a>
      <a href="{{ route('createreservations')}}">CREATE RESERVATIONS ||</a>
      <a href="{{ route('registercustomer')}}">REGISTER CUSTOMER ||</a>
      <a href="{{ route('customerlist')}}">CUSTOMER LIST ||</a>
      <a href="{{ route('reservationhistory')}}">RESERVATION HISTORY ||</a>
      <a href="{{ route('menu')}}">MENU ||</a>
      <a href="{{ route('logout')}}">LOGOUT</a>
</ul>
</nav>
</center>
<body style="background-color: gray;">
    <center>
    <div class="figure1">

<figure class="fig1">

    <table>
    <tr>	
    <th colspan="1">	
        <a href="https://en.wikipedia.org/wiki/Larrabee_(microarchitecture)"> <img src="{{ asset('Images/intro.png') }}"> </a>
    </th>

    <th>
        <p class="Title"> Intel Graphics Card <br>Code:Larrabee (microarchitecture) </p>

    <p class="desc">
        Larrabee is the codename for a cancelled GPGPU chip that Intel was developing separately from its current line of integrated graphics accelerators. It is named after Larrabee State Park in Whatcom County, Washington, near the town of Bellingham. The chip was to be released in 2010 as the core of a consumer 3D graphics card, but these plans were cancelled due to delays and disappointing early performance figures. <a href="https://en.wikipedia.org/wiki/Larrabee_(microarchitecture)">Read more......</a>
    </p>

    </th>
    </tr>
    </table>

</figure>

</div>


<div class="figure2">

<figure class="fig2">

    <table>
    <tr>

    <th>
        <p class="Title2"> AMD 3rd Gen Ryzen™ <br>Threadripper™ processors </p>

    <p class="desc2">
        Supporting AMD 3rd Gen Ryzen™ Threadripper™ processors, the new TRX40 platform represents the pinnacle of desktop computing. Built for serious visual effects artists, data scientists, or anyone who takes their time seriously, the scalable AMD TRX40 chipset offers unprecedented expansion for serious multi-GPU and NVMe arrays thanks to bleeding-edge PCIe® 4.0 connectivity, exclusive to this platform in high-end desktop. Meanwhile: quad channel DDR4, available ECC support, and unlocked overclocking1 make TRX40 a lock for users that depend on serious computing. <a href="https://www.amd.com/en/chipsets/str40">Read more......</a>
    </p>

    </th>

    <th>	
        <a href="https://www.amd.com/en/chipsets/str40"> <img src="{{ asset('Images/AMD.png') }}" width="500px"> </a>
    </th>

    </tr>
    </table>

</figure>


</div>

<div class="figure3">

<figure class="fig3">

    <table>
    <tr>	
    <th colspan="1">	
        <a href="https://yourstory.com/mystory/how-virtual-reality-is-transforming-the-gaming-ind"> <img src="{{ asset('Images/VR.png') }}" width="500px" > </a>
    </th>

    <th>
        <p class="Title3"> What is Virtual Reality? </p>

    <p class="desc3">
        Virtual Reality’s most immediately-recognizable component is the head-mounted display (HMD). Human beings are visual creatures, and display technology is often the single biggest difference between immersive Virtual Reality systems and traditional user interfaces. For instance, CAVE automatic virtual environments actively display virtual content onto room-sized screens. While they are fun for people in universities and big labs, consumer and industrial wearables are the wild west.

        With a multiplicity of emerging hardware and software options, the future of wearables is unfolding but yet unknown. Concepts such as the HTC Vive Pro Eye, Oculus Quest and Playstation VR are leading the way, but there are also players like Google, Apple, Samsung, Lenovo and others who may surprise the industry with new levels of immersion and usability. Whomever comes out ahead, the simplicity of buying a helmet-sized device that can work in a living-room, office, or factory floor has made HMDs center stage when it comes to Virtual Reality technologies. <a href="https://yourstory.com/mystory/how-virtual-reality-is-transforming-the-gaming-ind">Read more......</a>
    </p>

    </th>
    </tr>
    </table>

</figure>

</div>

<div class="figure4">

<figure class="fig4">

    <table>
    <tr>

    <th>
        <p class="Title4"> The International (Dota 2) </p>

    <p class="desc4">
        The International is an annual esports world championship tournament for the video game Dota 2, hosted and produced by the game's developer, Valve. The International was first held at Gamescom as a promotional event for the game in 2011, and has since been held annually. The tournament consists of 18 teams; 12 earning a direct invite based on results from a tournament series known as the Dota Pro Circuit and six from winning regional qualifying playoff brackets, one each from North America, South America, Southeast Asia, China, Europe, and CIS regions. The most recent champion is OG, who are also the only team to win an International more than once.<br> <a href="https://en.wikipedia.org/wiki/The_International_(Dota_2)">Read more......</a>
    </p>

    </th>

    <th>	
        <a href="https://en.wikipedia.org/wiki/The_International"> <img src="{{ asset('Images/TI.jpg') }}" width="500px"> </a>
    </th>

    </tr>
    </table>

</figure>

</div>
    </center>
</body>
</html>

<style>
    .figure1{

padding-top: 20px;
padding-left: 100px;
padding-right: 100px;

}

.fig1{


color: white; 
display:flex;
text-align: justify;
text-shadow: 2px 2px black;

}

.fig1 p{

padding-top: 30px;	
padding-left: 50px;

}

.desc {

font-size: 20px;
font-family: 'Oxanium', cursive;
padding-bottom: 50px;

}

.Title {

font-family: 'Oxanium', cursive;
font-size: 30px;
font-weight: bold;
text-shadow: 5px 2px black;


}

.figure2{

padding-top: 20px;
padding-left: 100px;
padding-right: 100px;

}
.fig2{

color: white; 
display:flex;
text-align: justify;
text-shadow: 2px 2px black;

}

.fig2 p{

padding-top: 30px;	
padding-right: 50px;

}

.desc2 {

font-size: 20px;
font-family: 'Oxanium', cursive;
padding-bottom: 50px;

}

.Title2 {

font-family: 'Oxanium', cursive;
font-size: 30px;
font-weight: bold;
text-shadow: 5px 2px black;


}

.figure3 {

padding-top: 50px;
margin-left:  100px;
margin-right:  100px;

}

.fig3{

color: white; 
display:flex;
text-align: justify;
text-shadow: 2px 2px black;
}

.fig3 p{

padding-top: 30px;	
padding-left: 50px;

}

.desc3 {

font-size: 20px;
font-family: 'Oxanium', cursive;
padding-bottom: 50px;

}

.Title3 {

font-family: 'Oxanium', cursive;
font-size: 30px;
font-weight: bold;
text-shadow: 5px 2px black;

}

.figure4{

padding-top: 50px;
margin-left:  100px;
margin-right:  100px;
padding-bottom: 40px;

}
.fig4 {

color: white; 
display:flex;
text-align: justify;
text-shadow: 2px 2px black;
}

.fig4 p{

padding-top: 30px;	
padding-right: 50px;

}

.desc4 {

font-size: 20px;
font-family: 'Oxanium', cursive;
padding-bottom: 50px;

}

.Title4 {

font-family: 'Oxanium', cursive;
font-size: 30px;
font-weight: bold;
text-shadow: 5px 2px black;

}
</style>