<button onclick="location.href='Login and Register/logRH.php'">Run as RH</button>
<button onclick="location.href='Login and Register/index.php'" style="--color:#FFA437;--border:2px;--slant:.5em" >Run as consultant</button>
<!-- <button style="--color:#D37A10;--slant:40px;--border:8px">Consultants</button> -->

<style>
    button {
  --border: 5px;    /* the border width */
  --slant: 0.7em;   /* control the slanted corners */
  --color: #FFBF50; /* the color */
  
  font-size: 35px;
  padding: 0.4em 1.2em;
  border: none;
  cursor: pointer;
  font-weight: bold;
  color: var(--color);
  background: 
     linear-gradient(to bottom left,var(--color)  50%,#0000 50.1%) top right,
     linear-gradient(to top   right,var(--color)  50%,#0000 50.1%) bottom left;
  background-size: calc(var(--slant) + 1.3*var(--border)) calc(var(--slant) + 1.3*var(--border));
  background-repeat: no-repeat;
  box-shadow:
    0 0 0 200px inset var(--s,#0000),
    0 0 0 var(--border) inset var(--color);
  clip-path: 
      polygon(0 0, calc(100% - var(--slant)) 0, 100% var(--slant),
              100% 100%, var(--slant) 100%,0 calc(100% - var(--slant))
             );
  transition: color var(--t,0.3s), background-size 0.3s;
}
button:focus-visible {
  outline-offset: calc(-1*var(--border));
  outline: var(--border) solid #000c;
  clip-path: none;
  background-size: 0 0;
}
button:hover,
button:active{
  background-size: 100% 100%;
  color: #fff;
  --t: 0.2s 0.1s;
}
button:active {
  --s: #0005;
  transition: none;
}



body {
  display:grid;
  grid-auto-flow:column;
  grid-gap:20px;
  place-content:center;
  margin:0;
  height:100vh;
}
</style>