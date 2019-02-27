@extends('_layouts.master')
@section('title', 'What\'s New | ')
@section('content')
<div class="banner">
    <div class="banner-content">
        <h1 class="banner-subtitle">Cool new nerd stuff</h1>
        <h2 class="banner-title">What's New</h2>
    </div>
</div>
<div class="content">
    <div class="section module auto">
        <div>
            <h3>New Event</h3>
            <p>We added a new angel to our tech fest with event like:</p><br/>
            <p><strong>अल्फ़ाज़ aur जज़्बात:</strong> This year we made an effort to amalgamate tech with culture. Here we bring to you the very first Poetry event of Sankalan 2019, <a class="xhr" href="{{ $page->baseUrl }}/events/alfaaz-aur-jazbaat/" target="_blank">alfaaz aur jazbaat</a>. We went on to collaborate with <a class="xhr" href="https://www.youtube.com/channel/UCeMecwNIJrd_kyw_6fKgmqw/featured" target="_blank"><b>Social House</b></a>, the one-of-its-kind youtube channel with more than a million subscribers. Best part is, The Winner will get a chance to be featured on India's most subscribed poetry and storytelling YouTube channe. We are really enthusiastic about this event, hope you are too. </p><br/>
            </div>
    </div>
    <div class="section module auto">
        <div>
            <h3>Registration process</h3>
            <p>We created a brand new event's portal(link will be active soon) for Sankalan 2019 participation & Online Quizzing. No, we are not using Google Forms (nothing wrong in that).</p>
            <p>We made registration process really simple, for you, and for us (not necessarily for our developers).</p><br/>
            <p>In almost every fest, you register using a form. Most of times, they ask you for very useless and repetitive info. Our dashboard will ask you for only to required details, to the point. We'll even fill some info about you if we can get it
                ;)</p><br/>
            <p>Team up with your friends right on the portal and participate in different events with your custom teams. You cannot participate in same event from different teams.</p><br/>
            <p>And the best part, just remember your Team ID &amp; User ID and we will do the magic for you. We won't waste your time in writing details about you in spreadsheets or paper for each event! Real Smooth.</p><br/>
            <p>And you can see your progress/stats and leaderboards in the portal.</p><br/>
            <p>If you haven't registered for Sankalan yet, what are you waiting for? Register yourself at <a href="#">our portal</a> (link will be active soon) and tell your friends also!</p>
        </div>
    </div>
    <div class="section module auto">
        <div>
            <h3>The Website</h3>
            <p>We created this website: <strong>ducs.in</strong> as a single place to host all events and info related to our department.</p>
            <p>The future students can use this as a platform for future events and publications. And we'll pass on the knowledge.</p>
            <p>The website is totally student managed and is not endorsed by any official regulatory commities (that is, our department or university).</p>
            <p>For you, the important part is the Sankalan section, most likely.</p><br/>
            <p>The website is using <strong>https</strong>, and is hosted with AWS (to be precise, see <a href="/uses/">https://csdu.github.io/uses/</a> for technical details about the website)</p><br/>
            <p>The embrace <strong>open source</strong> development, we have decided to publish all the source code of website (including the Dashboard, Sankalan website, main website; excluding security related stuff) on Github.</p>
            <p>Source code for:</p>
            <p>&nbsp;&ndash; Sankalan 2019 website:&nbsp;<a href="https://github.com/csdu/sankalan" target="_blank">https://github.com/csdu/sankalan</a></p>
            <p>&nbsp;&ndash; Srijan 2019 website:&nbsp;<a href="https://github.com/csdu/srijan-2018" target="_blank">https://github.com/csdu/srijan-2018</a></p>
            <p>&nbsp;&ndash; Sankalan Portalx:&nbsp;<a href="https://github.com/csdu/sankalan-portal" target="_blank">https://github.com/csdu/sankalan-portal</a></p>
        </div>
    </div>
</div>    
@endsection