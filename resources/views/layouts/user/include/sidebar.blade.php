<style>

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top:0;
  left: 0;
  background: #eee;
  overflow-x: hidden;
 padding-top: 70px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: red;
  display: block;
}

.sidenav a:hover {
  color: #064579;
}

</style>

 <div class="container">
        
<div class="col-md-3 ">
<div class="sidenav">
  <ul>
     <li> <a href="#"> <i class="material-icons">keyboard_arrow_right</i>ইতিহাস</a></li>
      <hr>
      <li> <a href="{!! url('/freedom_fighter'); !!}"> <i class="material-icons">keyboard_arrow_right</i>মুক্তিযোদ্ধা‎</a></li>
      <hr>
  <li><a href="{!! url('/books/books'); !!}">
    <i class="material-icons">keyboard_arrow_right</i>বই
</a></li><hr>
  <li><a href="{!! url('/archive/image'); !!}"><i class="material-icons">keyboard_arrow_right</i>ছবি</a></li><hr>
  <li><a href="{!! url('/archive/documents'); !!}"><i class="material-icons">keyboard_arrow_right</i>ডকুমেন্টস</a></li><hr>
</ul>
</div>

</div>
</div>


