<?php include 'includes/header.php'; ?>

<style>
/* Full-viewport center layout */

body {
margin: 0;


color: #fff;
display: flex;
align-items: center;
justify-content: center;
text-align: center;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
overflow: hidden;
}


.wrap {
padding: 2rem;
width: 100%;
margin-top:80px;
}


/* Big responsive "Coming Soon" text */
.coming-soon {
    
margin-top: 10px;
font-weight: 800;
line-height: 0.95;
/* Use clamp to keep size responsive: min 48px, preferred 18vw, max 160px */
font-size: 65px;
letter-spacing: 6px;
text-transform: uppercase;
text-shadow:
0 2px 0 rgba(0,0,0,0.18),
0 8px 30px rgba(0,0,0,0.45);
display: inline-block;
transform: translateZ(0);
animation: popIn 900ms cubic-bezier(.2,.9,.3,1) both;
}

/* Subtext */
.subtext {
margin-top: 1rem;
font-size: 1.125rem;
opacity: 0.95;
}


/* Decorative underline */
.underline {
height: 6px;
width: 160px;
margin: 1.5rem auto;
background: linear-gradient(90deg, rgba(255,255,255,0.14), rgba(255,255,255,0.06));
border-radius: 8px;
box-shadow: 0 6px 18px rgba(0,0,0,0.35);
}


/* Simple pulsing dot animation */
.dot {
display: inline-block;
width: 10px;
height: 10px;
margin-left: 8px;
border-radius: 50%;
background: rgba(255,255,255,0.95);
animation: pulse 1.6s infinite ease-in-out;
vertical-align: middle;
}
.dot:nth-child(2){ animation-delay: .2s }
.dot:nth-child(3){ animation-delay: .4s }


@keyframes pulse {
0% { transform: scale(1); opacity: 1 }
50% { transform: scale(1.6); opacity: .35 }
100% { transform: scale(1); opacity: 1 }
}


@keyframes popIn {
0% { transform: translateY(24px) scale(.98); opacity: 0 }
60% { transform: translateY(-6px) scale(1.02); opacity: 1 }
100% { transform: translateY(0) scale(1) }
}



</style>
<!-- Page Title -->

<!-- End Page Title -->
 <div class="row">
    <div class="col-9 m-auto">
<div class="wrap">
<h1 class="coming-soon">Coming Soon</h1>
<div class="underline" aria-hidden="true"></div>
<p class="subtext">We're working hard to bring something great. Stay tuned<span class="sr-only"> — coming soon</span>
<span class="dot" aria-hidden="true"></span>
<span class="dot" aria-hidden="true"></span>
<span class="dot" aria-hidden="true"></span>
</p>

</div>
</div>
 </div>

<?php include 'includes/footer.php'; ?>