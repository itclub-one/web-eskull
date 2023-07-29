<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') - Webex</title>

  <style>
    body {
  margin: 0;
  font-size: 20px;
}

* {
  box-sizing: border-box;
}

.container {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background: white;
  color: black;
  font-family: arial, sans-serif;
  overflow: hidden;
}

.content {
  position: relative;
  width: 600px;
  max-width: 100%;
  margin: 20px;
  background: white;
  padding: 60px 40px;
  text-align: center;
  box-shadow: -10px 10px 67px -12px rgba(0, 0, 0, 0.2);
  opacity: 0;
  animation: apparition 0.8s 1.2s cubic-bezier(0.39, 0.575, 0.28, 0.995) forwards;
}
.content p {
  font-size: 1.3rem;
  margin-top: 0;
  margin-bottom: 0.6rem;
  letter-spacing: 0.1rem;
  color: #595959;
}
.content p:last-child {
  margin-bottom: 0;
}
.content a {
  display: inline-block;
  margin-top: 2rem;
  padding: 0.5rem 1rem;
  border: 3px solid #595959;
  background: transparent;
  font-size: 1rem;
  color: #595959;
  text-decoration: none;
  cursor: pointer;
  font-weight: bold;
}

.particle {
  position: absolute;
  display: block;
  pointer-events: none;
}
.particle:nth-child(1) {
  top: 52.3002421308%;
  left: 35.0877192982%;
  font-size: 26px;
  filter: blur(0.02px);
  animation: 34s float2 infinite;
}
.particle:nth-child(2) {
  top: 89.1064871481%;
  left: 18.6823992134%;
  font-size: 17px;
  filter: blur(0.04px);
  animation: 32s float infinite;
}
.particle:nth-child(3) {
  top: 96.4677222899%;
  left: 81.2928501469%;
  font-size: 21px;
  filter: blur(0.06px);
  animation: 30s float infinite;
}
.particle:nth-child(4) {
  top: 72.009864365%;
  left: 6.9238377844%;
  font-size: 11px;
  filter: blur(0.08px);
  animation: 28s float infinite;
}
.particle:nth-child(5) {
  top: 95.5665024631%;
  left: 87.9446640316%;
  font-size: 12px;
  filter: blur(0.1px);
  animation: 35s float2 infinite;
}
.particle:nth-child(6) {
  top: 91.7874396135%;
  left: 27.2373540856%;
  font-size: 28px;
  filter: blur(0.12px);
  animation: 37s float infinite;
}
.particle:nth-child(7) {
  top: 41.6464891041%;
  left: 90.6432748538%;
  font-size: 26px;
  filter: blur(0.14px);
  animation: 21s float2 infinite;
}
.particle:nth-child(8) {
  top: 59.9508599509%;
  left: 63.1163708087%;
  font-size: 14px;
  filter: blur(0.16px);
  animation: 39s float2 infinite;
}
.particle:nth-child(9) {
  top: 54.7677261614%;
  left: 89.3909626719%;
  font-size: 18px;
  filter: blur(0.18px);
  animation: 31s floatReverse infinite;
}
.particle:nth-child(10) {
  top: 77.6699029126%;
  left: 83.984375%;
  font-size: 24px;
  filter: blur(0.2px);
  animation: 26s floatReverse2 infinite;
}
.particle:nth-child(11) {
  top: 61.9105199516%;
  left: 92.5024342746%;
  font-size: 27px;
  filter: blur(0.22px);
  animation: 37s floatReverse infinite;
}
.particle:nth-child(12) {
  top: 6.8376068376%;
  left: 63.7880274779%;
  font-size: 19px;
  filter: blur(0.24px);
  animation: 25s float infinite;
}
.particle:nth-child(13) {
  top: 48.7804878049%;
  left: 73.5294117647%;
  font-size: 20px;
  filter: blur(0.26px);
  animation: 31s float infinite;
}
.particle:nth-child(14) {
  top: 65.0485436893%;
  left: 84.9609375%;
  font-size: 24px;
  filter: blur(0.28px);
  animation: 34s floatReverse2 infinite;
}
.particle:nth-child(15) {
  top: 74.9391727494%;
  left: 57.7299412916%;
  font-size: 22px;
  filter: blur(0.3px);
  animation: 24s float infinite;
}
.particle:nth-child(16) {
  top: 57.9710144928%;
  left: 15.5642023346%;
  font-size: 28px;
  filter: blur(0.32px);
  animation: 32s float2 infinite;
}
.particle:nth-child(17) {
  top: 5.7971014493%;
  left: 33.0739299611%;
  font-size: 28px;
  filter: blur(0.34px);
  animation: 29s floatReverse2 infinite;
}
.particle:nth-child(18) {
  top: 14.598540146%;
  left: 61.6438356164%;
  font-size: 22px;
  filter: blur(0.36px);
  animation: 28s float infinite;
}
.particle:nth-child(19) {
  top: 59.7307221542%;
  left: 44.2477876106%;
  font-size: 17px;
  filter: blur(0.38px);
  animation: 34s floatReverse infinite;
}
.particle:nth-child(20) {
  top: 79.5151515152%;
  left: 17.5609756098%;
  font-size: 25px;
  filter: blur(0.4px);
  animation: 39s floatReverse2 infinite;
}
.particle:nth-child(21) {
  top: 37.0280146163%;
  left: 59.7453476983%;
  font-size: 21px;
  filter: blur(0.42px);
  animation: 39s floatReverse2 infinite;
}
.particle:nth-child(22) {
  top: 44.1176470588%;
  left: 46.2598425197%;
  font-size: 16px;
  filter: blur(0.44px);
  animation: 32s float infinite;
}
.particle:nth-child(23) {
  top: 60.0484261501%;
  left: 8.7719298246%;
  font-size: 26px;
  filter: blur(0.46px);
  animation: 24s float2 infinite;
}
.particle:nth-child(24) {
  top: 64.7058823529%;
  left: 70.8661417323%;
  font-size: 16px;
  filter: blur(0.48px);
  animation: 26s floatReverse infinite;
}
.particle:nth-child(25) {
  top: 22.6044226044%;
  left: 60.157790927%;
  font-size: 14px;
  filter: blur(0.5px);
  animation: 35s floatReverse infinite;
}
.particle:nth-child(26) {
  top: 68.209500609%;
  left: 39.1772771792%;
  font-size: 21px;
  filter: blur(0.52px);
  animation: 34s floatReverse2 infinite;
}
.particle:nth-child(27) {
  top: 32.4324324324%;
  left: 50.2958579882%;
  font-size: 14px;
  filter: blur(0.54px);
  animation: 33s floatReverse infinite;
}
.particle:nth-child(28) {
  top: 36.8484848485%;
  left: 15.6097560976%;
  font-size: 25px;
  filter: blur(0.56px);
  animation: 29s floatReverse infinite;
}
.particle:nth-child(29) {
  top: 24.4498777506%;
  left: 83.4970530452%;
  font-size: 18px;
  filter: blur(0.58px);
  animation: 34s floatReverse2 infinite;
}
.particle:nth-child(30) {
  top: 25.3968253968%;
  left: 13.7389597645%;
  font-size: 19px;
  filter: blur(0.6px);
  animation: 40s floatReverse2 infinite;
}
.particle:nth-child(31) {
  top: 61.9926199262%;
  left: 18.7561697927%;
  font-size: 13px;
  filter: blur(0.62px);
  animation: 35s floatReverse2 infinite;
}
.particle:nth-child(32) {
  top: 95.3771289538%;
  left: 20.5479452055%;
  font-size: 22px;
  filter: blur(0.64px);
  animation: 22s floatReverse infinite;
}
.particle:nth-child(33) {
  top: 70.6166868198%;
  left: 81.7916260954%;
  font-size: 27px;
  filter: blur(0.66px);
  animation: 26s floatReverse infinite;
}
.particle:nth-child(34) {
  top: 27.1186440678%;
  left: 19.4931773879%;
  font-size: 26px;
  filter: blur(0.68px);
  animation: 33s floatReverse infinite;
}
.particle:nth-child(35) {
  top: 43.530834341%;
  left: 88.6075949367%;
  font-size: 27px;
  filter: blur(0.7px);
  animation: 40s floatReverse infinite;
}
.particle:nth-child(36) {
  top: 92.6417370326%;
  left: 27.2108843537%;
  font-size: 29px;
  filter: blur(0.72px);
  animation: 30s floatReverse2 infinite;
}
.particle:nth-child(37) {
  top: 73.4299516908%;
  left: 36.9649805447%;
  font-size: 28px;
  filter: blur(0.74px);
  animation: 38s floatReverse infinite;
}
.particle:nth-child(38) {
  top: 8.6746987952%;
  left: 19.4174757282%;
  font-size: 30px;
  filter: blur(0.76px);
  animation: 22s floatReverse2 infinite;
}
.particle:nth-child(39) {
  top: 38.8349514563%;
  left: 53.7109375%;
  font-size: 24px;
  filter: blur(0.78px);
  animation: 30s float2 infinite;
}
.particle:nth-child(40) {
  top: 93.4809348093%;
  left: 12.8331688055%;
  font-size: 13px;
  filter: blur(0.8px);
  animation: 26s float2 infinite;
}
.particle:nth-child(41) {
  top: 4.8367593712%;
  left: 89.5813047712%;
  font-size: 27px;
  filter: blur(0.82px);
  animation: 40s floatReverse2 infinite;
}
.particle:nth-child(42) {
  top: 63.1067961165%;
  left: 75.1953125%;
  font-size: 24px;
  filter: blur(0.84px);
  animation: 25s float2 infinite;
}
.particle:nth-child(43) {
  top: 60.024600246%;
  left: 35.538005923%;
  font-size: 13px;
  filter: blur(0.86px);
  animation: 30s float infinite;
}
.particle:nth-child(44) {
  top: 14.4752714113%;
  left: 36.9290573372%;
  font-size: 29px;
  filter: blur(0.88px);
  animation: 40s float infinite;
}
.particle:nth-child(45) {
  top: 32.2344322344%;
  left: 91.2659470069%;
  font-size: 19px;
  filter: blur(0.9px);
  animation: 24s float2 infinite;
}
.particle:nth-child(46) {
  top: 98.1595092025%;
  left: 24.6305418719%;
  font-size: 15px;
  filter: blur(0.92px);
  animation: 34s floatReverse2 infinite;
}
.particle:nth-child(47) {
  top: 76.8472906404%;
  left: 75.0988142292%;
  font-size: 12px;
  filter: blur(0.94px);
  animation: 26s float infinite;
}
.particle:nth-child(48) {
  top: 39.5180722892%;
  left: 50.4854368932%;
  font-size: 30px;
  filter: blur(0.96px);
  animation: 29s float infinite;
}
.particle:nth-child(49) {
  top: 96.2332928311%;
  left: 42.0332355816%;
  font-size: 23px;
  filter: blur(0.98px);
  animation: 38s float2 infinite;
}
.particle:nth-child(50) {
  top: 94.6341463415%;
  left: 90.1960784314%;
  font-size: 20px;
  filter: blur(1px);
  animation: 21s float infinite;
}
.particle:nth-child(51) {
  top: 34.1047503045%;
  left: 28.4035259549%;
  font-size: 21px;
  filter: blur(1.02px);
  animation: 31s floatReverse2 infinite;
}
.particle:nth-child(52) {
  top: 16.4251207729%;
  left: 15.5642023346%;
  font-size: 28px;
  filter: blur(1.04px);
  animation: 25s float infinite;
}
.particle:nth-child(53) {
  top: 49.3218249075%;
  left: 67.2601384768%;
  font-size: 11px;
  filter: blur(1.06px);
  animation: 39s float infinite;
}
.particle:nth-child(54) {
  top: 35.4243542435%;
  left: 94.7680157947%;
  font-size: 13px;
  filter: blur(1.08px);
  animation: 27s floatReverse2 infinite;
}
.particle:nth-child(55) {
  top: 66.5060240964%;
  left: 58.2524271845%;
  font-size: 30px;
  filter: blur(1.1px);
  animation: 27s floatReverse2 infinite;
}
.particle:nth-child(56) {
  top: 60.7099143207%;
  left: 42.2812192724%;
  font-size: 17px;
  filter: blur(1.12px);
  animation: 29s floatReverse infinite;
}
.particle:nth-child(57) {
  top: 50.3022974607%;
  left: 75.9493670886%;
  font-size: 27px;
  filter: blur(1.14px);
  animation: 33s floatReverse2 infinite;
}
.particle:nth-child(58) {
  top: 49.6350364964%;
  left: 6.8493150685%;
  font-size: 22px;
  filter: blur(1.16px);
  animation: 24s floatReverse2 infinite;
}
.particle:nth-child(59) {
  top: 39.661426844%;
  left: 16.553067186%;
  font-size: 27px;
  filter: blur(1.18px);
  animation: 29s float infinite;
}
.particle:nth-child(60) {
  top: 4.9261083744%;
  left: 88.9328063241%;
  font-size: 12px;
  filter: blur(1.2px);
  animation: 38s float infinite;
}
.particle:nth-child(61) {
  top: 45.6310679612%;
  left: 71.2890625%;
  font-size: 24px;
  filter: blur(1.22px);
  animation: 33s float infinite;
}
.particle:nth-child(62) {
  top: 74.8481166464%;
  left: 18.5728250244%;
  font-size: 23px;
  filter: blur(1.24px);
  animation: 27s float infinite;
}
.particle:nth-child(63) {
  top: 50.6699147381%;
  left: 36.2389813908%;
  font-size: 21px;
  filter: blur(1.26px);
  animation: 21s float2 infinite;
}
.particle:nth-child(64) {
  top: 8.8560885609%;
  left: 2.9615004936%;
  font-size: 13px;
  filter: blur(1.28px);
  animation: 26s floatReverse2 infinite;
}
.particle:nth-child(65) {
  top: 53.1400966184%;
  left: 51.5564202335%;
  font-size: 28px;
  filter: blur(1.3px);
  animation: 34s floatReverse2 infinite;
}
.particle:nth-child(66) {
  top: 58.3941605839%;
  left: 69.4716242661%;
  font-size: 22px;
  filter: blur(1.32px);
  animation: 26s floatReverse infinite;
}
.particle:nth-child(67) {
  top: 90.9535452323%;
  left: 90.373280943%;
  font-size: 18px;
  filter: blur(1.34px);
  animation: 29s floatReverse infinite;
}
.particle:nth-child(68) {
  top: 47.8632478632%;
  left: 93.2286555447%;
  font-size: 19px;
  filter: blur(1.36px);
  animation: 31s float2 infinite;
}
.particle:nth-child(69) {
  top: 95.7264957265%;
  left: 63.7880274779%;
  font-size: 19px;
  filter: blur(1.38px);
  animation: 28s float infinite;
}
.particle:nth-child(70) {
  top: 30.5795314427%;
  left: 2.9673590504%;
  font-size: 11px;
  filter: blur(1.4px);
  animation: 25s floatReverse2 infinite;
}
.particle:nth-child(71) {
  top: 17.3493975904%;
  left: 1.9417475728%;
  font-size: 30px;
  filter: blur(1.42px);
  animation: 38s float infinite;
}
.particle:nth-child(72) {
  top: 96.4677222899%;
  left: 78.3545543585%;
  font-size: 21px;
  filter: blur(1.44px);
  animation: 34s float2 infinite;
}
.particle:nth-child(73) {
  top: 47.400241838%;
  left: 22.3953261928%;
  font-size: 27px;
  filter: blur(1.46px);
  animation: 26s float infinite;
}
.particle:nth-child(74) {
  top: 28.1212121212%;
  left: 47.8048780488%;
  font-size: 25px;
  filter: blur(1.48px);
  animation: 37s floatReverse2 infinite;
}
.particle:nth-child(75) {
  top: 11.7073170732%;
  left: 51.9607843137%;
  font-size: 20px;
  filter: blur(1.5px);
  animation: 37s float2 infinite;
}
.particle:nth-child(76) {
  top: 67.2350791717%;
  left: 70.5190989226%;
  font-size: 21px;
  filter: blur(1.52px);
  animation: 36s floatReverse2 infinite;
}
.particle:nth-child(77) {
  top: 91.1515151515%;
  left: 54.6341463415%;
  font-size: 25px;
  filter: blur(1.54px);
  animation: 27s floatReverse infinite;
}
.particle:nth-child(78) {
  top: 48.6618004866%;
  left: 19.5694716243%;
  font-size: 22px;
  filter: blur(1.56px);
  animation: 37s floatReverse infinite;
}
.particle:nth-child(79) {
  top: 48.4848484848%;
  left: 28.2926829268%;
  font-size: 25px;
  filter: blur(1.58px);
  animation: 26s floatReverse infinite;
}
.particle:nth-child(80) {
  top: 20.5128205128%;
  left: 13.7389597645%;
  font-size: 19px;
  filter: blur(1.6px);
  animation: 23s floatReverse2 infinite;
}

@keyframes apparition {
  from {
    opacity: 0;
    transform: translateY(100px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
@keyframes float {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(180px);
  }
}
@keyframes floatReverse {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-180px);
  }
}
@keyframes float2 {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(28px);
  }
}
@keyframes floatReverse2 {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-28px);
  }
}
  </style>
</head>
<body>
  <main class='container'>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>4</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <span class='particle'>0</span>
    <article class='content'>
      <p>@yield('name')</p>
      <p>@yield('message')</p>
      <p>You got lost in the <strong>@yield('code')</strong> galaxy.</p>
      <p>
        <a href="/">Go back to Home.</a>
      </p>
    </article>
  </main>
</body>
</html>
