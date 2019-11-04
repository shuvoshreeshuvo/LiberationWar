@extends('layouts.front')
@section('title', ' আমাদের সম্পর্কে || আমার ইতিহাস')
<link href="{{asset('frontend/images/Contact-Book.png')}}" rel="icon">

@section('content')
<div class="container">
<div class="row">
<div class=" col-md-6 mb-3">
    <h5 class="headerfive">কিছু কথা</h5>
    <p>বাংলাদেশের মুক্তিযুদ্ধ একদিনে আসেনি। মুক্তিযুদ্ধ বাঙালি জাতির বহু ত্যাগ ও সংগ্রামের ফসল। ৫২ ভাষা আন্দোলন থেকে শুরু করে ৭১ পর্যন্ত সংগ্রামের মধ্যে দিয়ে ১৯৭১ সালের অগ্নিঝরা মার্চে শুরু হয় মুক্তিযুদ্ধ।পাকিস্তান আমলের পুরো সময়টিতে এদেশের মানুষ নানাভাবে বঞ্চনা আর নির্যাতনের শিকার হয়েছে। তাই অনেক আন্দোলন ও সংগ্রামের পর ১৯৭১ সালে বাঙালি জাতি ঝাঁপিয়ে পড়েছিল মহান মুক্তিযুদ্ধে। তারই ফসল আমাদের এই বাংলাদেশ। বহু মানুষের আত্মত্যাগ ও বীরত্বের মাধ্যমে পাকিস্তানি হানাদার বাহিনীকে পরাজিত করে আমরা পেয়েছি আমাদের স্বাধীনতা। জাতি অর্জন করেছে বিজয়। ইতিহাসে আমরা পরিচিত হয়েছি বীর বাঙালি ও বিজয়ী জাতি হিসাবে।নতুন প্রজন্মকে মুক্তিযুদ্ধের সঠিক ইতিহাস জানতে হবে। স্বাধীনতার চেতনায় দেশকে এগিয়ে নিতে হবে, মুক্তিযুদ্ধের সঠিক ইতিহাস জানতে হবে।যে জাতি তার নিজস্ব ইতিহাস জানে না সে জাতি নিজের মেরুদন্ড সোজা করে দাড়াতে পারে না।প্রজন্ম থেকে প্রজন্মান্তরে যেন জানতে পারে যে কত মহান ত্যাগের বিনিময়ে আমরা এই স্বাধীনতা অর্জন করেছি। সেই স্মৃতিচিহ্নগুলো যেন তারা দেখে।সেই স্মৃতিগুলি যেন তারা উপলদ্ধি করে। অন্তরে ধারণ করে এবং সেভাবেই যেন নিজেদের চরিত্রকে গঠন করতে পারে, দেশপ্রেমে তারা উদ্বুদ্ধ হয়।</p>

    <p>বাংলাদেশের মুক্তিযুদ্ধের ইতিহাস সম্পর্কে জানতে 'আমার ইতিহাস' হতে পারে যে কারো সহায়ক। স্বাধীন বাংলাদেশের রক্তাক্ত জন্ম-ইতিহাসের সাক্ষীগুলো তরুণ প্রজন্মের কাছে তুলে ধরার চেষ্টা করা হয়েছে এখানে। বলা হয়েছে স্বাধীনতার কথা। এটি মুক্তিযুদ্ধের ইতিহাস ও এর পেছনের গল্পগুলো সম্পর্কে জাদুঘরটি সম্যক কিছু ধারণা দিতে পারে ছোট বড় সবাইকে।</p>
</div>


<div class="col-md-6 pt-md-2">
	<h5 class="headerfive">আমাদের সাথে যোগাযোগ করুন</h5>
<form class="contact-form" method="post" action="{{ route('contact.send') }}">
    {{ csrf_field() }}

<div class="form-group">

    <div class="form-field">
    <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="আপনার নাম">
        <i class="fa fa-user"></i>
    </div>
  </div>

  <div class="form-group">

      <div class="form-field">
      <input  type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="আপনার ইমেইল">
    <small id="emailHelp" class="form-text text-muted">

আমরা অন্য কারো সাথে আপনার ইমেইল শেয়ার করব না।</small>
      <i class="fa fa-envelope"></i>
      </div>
  </div>

  <div class="form-group">

      <div class="form-field">
    <textarea class="form-control" name="message" id="FormControlTextarea1"  rows="3" placeholder="আপনার বার্তা *" ></textarea>
          <i class="fas fa-pen"></i>
      </div>
  </div>
  
  <input type="submit" class="btn " value="বার্তা পাঠান">
</form>

</div>
</div>


</div>
@endsection