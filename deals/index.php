<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>🔥 Temu App - Claim $200 Coupon!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
      background-color: #transparent;
      color: #2b00fffa;
     }
    .overlay {
      background: url('https://yunbukrzhwsuclgdyczr.supabase.co/storage/v1/object/public/temu//gdansk-poland-march-temu-app-icon-screen-mobile-phone-iphone-apple-shopping-cart-temu-subsidiary-china-based-e-277685855.webp') no-repeat center center fixed;
      background-size: cover;
      position: absolute;
      width: 100%;
      height: 100%;
      opacity: 0.50;
      z-index: 1;
    }
    .content {
      position: relative;
      z-index: 2;
      padding: 40px 20px;
      text-align: center;
      max-width: 900px;
      margin: auto;
    }
    .logo {
      width: 120px;
      margin-bottom: 20px;
    }
    h1 {
      font-size: 40px;
      color: #2b00fffa;
    }
    p {
      font-size: 20px;
      margin-bottom: 20px;
    }
    #timer {
      font-size: 48px;
      color: #ff6347;
      margin: 20px 0;
      font-weight: bold;
    }
    .cta-button {
      background: #ff4500;
      color: rgb(35, 31, 146);
      padding: 20px 40px;
      font-size: 24px;
      border: none;
      border-radius: 12px;
      text-decoration: none;
      display: inline-block;
      margin-top: 15px;
    }
    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 20px;
      margin-top: 40px;
    }
    .product {
      background: white;
      color: black;
      border-radius: 10px;
      padding: 10px;
    }
    .product img {
      width: 100%;
      border-radius: 8px;
    }
    .product p {
      margin: 5px 0;
      font-size: 14px;
    }
    .exit-popup {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.8);
      justify-content: center;
      align-items: center;
      text-align: center;
      z-index: 9999;
    }
    .exit-popup div {
      background: white;
      color: black;
      padding: 30px;
      border-radius: 10px;
    }
  </style>
</head>
<body>

<div class="overlay"></div>
<div class="content">
  <img src="https://yunbukrzhwsuclgdyczr.supabase.co/storage/v1/object/public/temu//temulogo1.png" class="logo" alt="Temu Logo">
  <h1>🎁 Download the Temu App & Get $200 Coupon!</h1>
  <p>Install now to unlock huge discounts. Only for the next:</p>
  <div id="timer">00:59</div>
  <a href="https://temu.to/k/e7ufy1679gf" class="cta-button">📲 Download the App & Get $200</a>

  <div class="product-grid">
    <div class="product">
      <img src="https://img.kwcdn.com/product/fancy/a0e735ad-5962-4022-88a5-02753d2f793c.jpg?imageView2/2/w/800/q/70/format/webp" />
      <p>Wireless Earbuds - $5.99</p>
    </div>
    <div class="product">
      <img src="https://img.kwcdn.com/product/fancy/37dc1fd0-53fc-457e-8272-95346ff79dd0.jpg?imageView2/2/w/800/q/70/format/webp" />
      <p>LED Makeup Mirror - $3.99</p>
    </div>
    <div class="product">
      <img src="https://img.kwcdn.com/product/fancy/a317300e-d3ae-4266-83b0-cbbc068498f4.jpg?imageView2/2/w/800/q/70/format/webp" />
      <p>Smart Watch - $9.99</p>
    </div>
    <div class="product">
      <img src="https://img.kwcdn.com/product/algo_check/auto/20687a6d79f1d21d1f780a529736f2c4_1734346001213.jpg?imageView2/2/w/800/q/70/format/webp" />
      <p>Bluetooth Speaker - $9.99</p>
    </div>
  </div>
</div>

<div class="exit-popup" id="exitPopup">
  <div>
    <h2>Wait! 🎉</h2>
    <p>Don’t miss your $200 coupon. Download the Temu app now and start shopping smart!</p>
    <a href="https://temu.to/k/e7ufy1679gf" class="cta-button">Yes! Get My $200 Now</a>
  </div>
</div>

<script>
  // Countdown Timer (59 seconds)
  let timer = 59;
  const timerDisplay = document.getElementById("timer");
  const countdown = setInterval(() => {
    if (timer > 0) {
      timer--;
      const minutes = String(Math.floor(timer / 60)).padStart(2, '0');
      const seconds = String(timer % 60).padStart(2, '0');
      timerDisplay.textContent = `${minutes}:${seconds}`;
    } else {
      clearInterval(countdown);
      timerDisplay.textContent = "00:00";
    }
  }, 1000);

  // Exit Intent Popup
  let shown = false;
  document.addEventListener('mouseleave', function (e) {
    if (!shown && e.clientY < 10) {
      document.getElementById('exitPopup').style.display = 'flex';
      shown = true;
    }
  });
</script>

</body>
</html>
