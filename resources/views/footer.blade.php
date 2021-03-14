<div class="cart_box" id="nssojsbkn">
  <header><span class="fa fa-shopping-bag"></span>  <span class="wo">{{ __('My Cart') }}</header>
  <span class="items"><span class="number_no">0</span> {{__('Item Added')}}</span>
</div>
<div class="un_footer">
<div class="footer_part">
  <div class="partitions w80">
    <h3 style="font-family: 'Orbitron', sans-serif;">PaiPixel</h3>
    <h4 style="font-family: 'Orbitron', sans-serif;">More Exam, More Skills</h4>
    <br>
    <p style="color: white !important; font-weight: normal;">
      PaiPixel বাংলাদেশের সর্ববৃহৎ Student-Teacher Interactive Educational Platform যেটি বেশি বেশি প্রতিযোগিতামূলক পরীক্ষার মাধ্যমে শিক্ষার্থীদের নিজ নিজ বিষয়ে দক্ষ করে তোলে। PaiPixel বিশ্বাস করে একজন ছাত্র কে গড়ে তুলতে হলে তাকে প্রথমে ছাত্র করে তুলতে হবে। কেউ নিজের দুর্বলতাটা জানতে পারলেই সেটাকে শক্ত করে আগলে ধরে উন্নতির দিকে ধাবিত হতে পারবে। তাই শিক্ষার্থীদের পরীক্ষা ও প্রতিযোগিতাকে মজার মধ্যে এনে তাদের জীবনকে আলোকিত করাই PaiPixel এর লক্ষ্য ।
    </p>
  </div>
   <div class="partitions">
    <h3 style="font-family: 'Orbitron', sans-serif;">PaiPixel</h3>
    <ul>
      <li><a href="https://paipixel.com/who_we_are.php">Who We Are</a></li>
      <li><a href="https://paipixel.com/careers.php">Careers</a></li>
      <li><a href="https://paipixel.com/termsandconditions.php">Terms & conditions</a></li>
      <li><a href="https://paipixel.com/privacy.php">Privacy Policy</a></li>
      <li><a href="https://paipixel.com/callaborate.php">Contribute PaiPixel</a></li>
      <li><a href="https://paipixel.com/feedback.php">Give Feedback</a></li>
      <li><a href="https://paipixel.com/contact.php">Contact us</a></li>
      <li><a href="https://paipixel.com/FAQ">FAQ</a></li>
    </ul>
  </div>
   <div class="partitions">
    <h3 style="font-family: 'Orbitron', sans-serif;">Follow us</h3>
    <ul>
      <li><a target="_blank" href="https://www.facebook.com/PaiPixel/"><span class="images_ft"><img style="width: 18px;" src="https://paipixel.com/image/social/facebook.png"/></span>Facebook Page</a></li>
      <li><a target="_blank" href=""><span class="images_ft"><img style="width: 18px;" src="https://paipixel.com/image/social/youtube.png"/></span>Youtube</a></li>
      <li><a target="_blank" href="https://www.instagram.com/paipixel/"><span class="images_ft"><img style="width: 18px;" src="https://paipixel.com/image/social/instragram.png"/></span>Instragram</a></li>
      <li><a target="_blank" href="https://www.linkedin.com/company/paipixel"><span class="images_ft"><img style="width: 18px;" src="https://paipixel.com/image/social/linkedin.png"/></span>LinkedIn</a></li>
    </ul>
  </div>
</div>

<div class="ending" style="color: white; background: #0E0E0E; padding: 10px; font-style: italic; text-align: center;">
  Copyright©2021 <a style="color: yellow; text-decoration: none;" href="https://www.suptokumar.com/">suptokumar.com</a> All Rights Reserved.
</div>

</div>

<script>
  // Make the DIV element draggable:
dragElement(document.getElementById("nssojsbkn"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id)) {
    // if present, the header is where you move the DIV from:
    document.getElementById(elmnt.id).onmousedown = dragMouseDown;
  } else {
    // otherwise, move the DIV from anywhere inside the DIV:
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    if (elmnt.offsetTop-pos2>110 && (window.innerHeight-(elmnt.offsetTop-pos2)-(document.getElementById('nssojsbkn').clientHeight )) > 3) {
    elmnt.style.top = (elmnt.offsetTop-pos2) + "px";
    }
  }

  function closeDragElement() {
    // stop moving when mouse button is released:
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>
