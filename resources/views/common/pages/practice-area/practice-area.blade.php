@extends('common.home.layouts.app')
@section('content')


<style>
    .tab-practice ul#pills-tab button {
    background: #FFFFFF !important;
    border: 1px solid #C2DDE4 !important;
    font-weight: 700;
    font-size: 10px;
    line-height: 18px;
    text-align: center;
    color: #156075 !important;
    padding: 13px 15px;
    border-radius: 0 !important;
    width: 110px;
    height: 110px;
}
@media(min-width:1024px){
    ul#pills-tab {
    overflow-x: unset;
    display: flex;
    flex-wrap: unset;
    padding-bottom: 0px !important;
}
}

    
</style>
<div class="p-80 bg-E8F8F2-same">
    <section class="practice-area p-0">
  <div class="container">
     <h1 class="font-64 same-font mb-3 mt-0"><span class="span-co">Family Law</span> Dubai</h1>

     <div class="tab-practice">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
          	
            <a href="{{ route('page-practice-areas') }}"><button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
             <img src="/new-design/assets/image/practice-area/cat1.png" alt="tab-icon-1" class="tab-icon"><br>
             Family Law
            </button></a>
          </li>
          <li class="nav-item" role="presentation">
           <a href="{{ route('financial-law') }}"> <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><img src="/new-design/assets/image/practice-area/cat2.png" alt="tab-icon-2" class="tab-icon"><br>Financial Law</button></a>
          </li>
          <li class="nav-item" role="presentation">
           <a href="{{ route('general-civil-law') }}"><button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><img src="/new-design/assets/image/practice-area/cat3.png" alt="tab-icon-3" class="tab-icon"><br>General Civil Law</button></a>
          </li>
           <li class="nav-item" role="presentation">
           <a href="{{ route('civil-litigation') }}"> <button class="nav-link" id="pills-contact-tab2" data-bs-toggle="pill" data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2" aria-selected="false"><img src="/new-design/assets/image/practice-area/cat4.png" alt="tab-icon-4" class="tab-icon"><br>Civil Litigation</button></a>
          </li>
           <li class="nav-item" role="presentation">
           <a href="{{ route('drug-offence') }}">  <button class="nav-link" id="pills-contact-tab3" data-bs-toggle="pill" data-bs-target="#pills-contact3" type="button" role="tab" aria-controls="pills-contact3" aria-selected="false"><img src="/new-design/assets/image/practice-area/cat5.png" alt="tab-icon-5" class="tab-icon"><br>Drug Offences</button></a>
          </li>
           <li class="nav-item" role="presentation">
            <a href="{{ route('islamic-finance') }}"><button class="nav-link" id="pills-contact-tab4" data-bs-toggle="pill" data-bs-target="#pills-contact4" type="button" role="tab" aria-controls="pills-contact4" aria-selected="false"><img src="/new-design/assets/image/practice-area/cat6.png" alt="tab-icon-6" class="tab-icon"><br>Islamic <br>Finance</button></a>
          </li>
           <li class="nav-item" role="presentation">
            <a href="{{ route('labour-employement-law') }}"><button class="nav-link" id="pills-contact-tab5" data-bs-toggle="pill" data-bs-target="#pills-contact5" type="button" role="tab" aria-controls="pills-contact5" aria-selected="false"><img src="/new-design/assets/image/practice-area/cat7.png" alt="tab-icon-7" class="tab-icon"><br>Labor and <br>Employment Law</button></a>
          </li>
           <li class="nav-item" role="presentation">
           <a href="{{ route('construction-law') }}"> <button class="nav-link" id="pills-contact-tab6" data-bs-toggle="pill" data-bs-target="#pills-contact6" type="button" role="tab" aria-controls="pills-contact6" aria-selected="false"><img src="/new-design/assets/image/practice-area/cat8.png" alt="tab-icon-8" class="tab-icon"><br>Construction Law</button></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="almo">  
              <div class="faq-part">
                <div class="faq-box" id="practice-area-2"> 
                        <h6><span class="span-co">Family Law </span>Dubai</h6>
                        <img src="/new-design/assets/image/practice-area/cat-detail.jpeg" alt="practice-area-2-1" class="practice-area-2-1 mt-4 mb-5">
                       <h2>Family Law in UAE:</h2>
<p>
In the UAE, family law is regulated by Islamic law (Sharia) as well as government rules and regulations. The Personal Status Law (PSL) regulates family issues such as marriage, divorce, child custody, and inheritance. Here is a more in-depth look at some of the most important elements of UAE family law:</p>

<h2>Marriage:</h2>
<p>Under the PSL, a Muslim man can marry a Muslim woman, a Christian woman, or a Jewish woman, but a Muslim woman can only marry a Muslim man. Both parties must have reached the legal age of 18 and must have their guardian's consent if they are younger than 18. The parties must also provide proof of their identity and marital status. The marriage contract must be registered with the relevant authorities in order to be legally recognized.</p>

<h2>Polygamy:</h2>
<p>Polygamy is allowed under Islamic law, but there are restrictions. A Muslim man can have up to four wives, but must have the consent of all wives and must treat them equally. If the man cannot treat his wives equally, he must only have one wife. The PSL also requires the man to prove that he can financially support all of his wives and their children.</p>

<h2>Divorce:</h2>
<p>Divorce is allowed under Islamic law, but there are specific requirements and procedures that must be followed. A Muslim woman can seek a divorce if her husband has mistreated her, is impotent, or has abandoned her for a period of at least three months. A Muslim man can seek a divorce for a variety of reasons, including his wife's disobedience or failure to fulfil her marital duties. In all cases, divorce proceedings are handled by the UAE courts.</p>

<h2>Child Custody:</h2>
<p>Custody of children is generally granted to the mother in the UAE, but the father retains the right to be involved in the child's life and make decisions regarding their upbringing. The court will determine the best interests of the child when making custody decisions. In cases where the mother is deemed unfit to care for the child, custody may be granted to the father or another family member.</p>

<h2>Inheritance:</h2>
<p>Inheritance is governed by Sharia law and generally follows the principle of distributing the deceased's assets among their family members, with males receiving a larger share than females. However, the deceased can make a will that specifies how their assets should be distributed. If there is no will, the court will determine how the assets should be distributed according to Sharia law.</p>

<h2>Domestic Violence:</h2>
<p>The UAE has several laws andl$ git checkout  latest-1
Branch 'latest-1' set up to track remote branch 'latest-1' from 'origin'.
 regulations that protect victims of domestic violence. The Domestic Violence Law provides legal protection to victims of domestic violence and outlines penalties for perpetrators. The Child Protection Law also provides legal protection to children who are victims of abuse or neglect.</p>

<p>Overall, family law in the UAE is complex and can vary depending on the specific circumstances of each case. It is recommended that individuals seek the advice of a qualified lawyer who is familiar with UAE family law when dealing with family law matters in the UAE.</p>


                      </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="almo">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
          </div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <div class="almo">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
          </div>
          <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
              <div class="almo">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
          </div>
          <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact-tab3">
              <div class="almo">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
          </div>
          <div class="tab-pane fade" id="pills-contact4" role="tabpanel" aria-labelledby="pills-contact-tab4">
              <div class="almo">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
          </div>
          <div class="tab-pane fade" id="pills-contact5" role="tabpanel" aria-labelledby="pills-contact-tab5">
              <div class="almo">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
          </div>
          <div class="tab-pane fade" id="pills-contact6" role="tabpanel" aria-labelledby="pills-contact-tab6">
              <div class="almo">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
          </div>
        </div>
    </div>
  </div>
</section>


<section class="p-0 pb-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mt-5">
        <div class="searchfild">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username"
              aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2"><img src="/new-design/assets/image/practice-area/search.png" alt=""></span>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="text-right search-drop withsamesize">
          <select class="department">
            <option>Select Department</option>
            <option>Department 2</option>
            <option>Department 3</option>
            <option>Department 4</option>
          </select>

          <select class="department">
            <option>Select Location</option>
            <option>Location 2</option>
            <option>Location 3</option>
            <option>Location 4</option>
          </select>

        </div>
      </div>
    </div>

    <div class="splaying">
      <div class="row">
        <div class="col-sm-6">
          <p>Displaying <span class="span-color">1 - 10 of 10 layers</span></p>
        </div>
        <div class="col-sm-6 text-right">
          <div class="btn-group drop">
            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Relevant <i class="fa-solid fa-sort"></i>
            </button>
            <ul class="dropdown-menu" style="">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Action 2</a></li>
            </ul>
          </div>

          <div class="btn-group drop">
            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Name A-Z <i class="fa-solid fa-sort"></i>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Name </a></li>
              <li><a class="dropdown-item" href="#">Name 2</a></li>
            </ul>
          </div>

          <a href="#" class="dot4"><i class="fa-solid fa-bars"></i></a>
          <a href="#" class="dot4"><i class="fa-solid fa-arrows-to-dot"></i></a>

        </div>
      </div>
    </div>

    <div class="">
      <div class="row mt-4">
        <div class="col-lg-6 col-md-12">
          <div class="law-box prime">
            <div class="row align-items-center">
              <div class="col-3 text-center m-p-0 over-n" data-bs-toggle="modal" data-bs-target="#lowyar2">
               <div class="sma-amse" id="iconcrow">
                 <img src="/new-design/assets/images/1.png" alt="Group">
                 <!--<i class="fa-solid fa-crown crown-p"></i>-->
               </div>
              </div>
              <div class="col-7"  data-bs-toggle="modal" data-bs-target="#lowyar1">
                <h5>Jaidev Kumar</h5>
                <div class="row">
                  <div class="col-6">
                    <ul class="star-part-2">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="col-6 p-0">
                    <span class="rev-35">(35 Reviews)</span>
                  </div>
                </div>
                <p class="mt-2"><i class="fa-solid fa-location-dot"></i> Dubai, UAE <br>Freelancer</p>

              </div>
              <div class="col-2 text-right ">
                <i class="fa-solid fa-eye eye-pri"></i>
              </div>
            </div>
          </div>

          <div class="law-box">
            <div class="row  align-items-center">
              <div class="col-3 text-center m-p-0 over-n">
               <div class="sma-amse">
                 <img src="/new-design/assets/images/3.png" alt="Group">
               </div>
              </div>
              <div class="col-7">
                <h5>Rashid Ali</h5>
                <div class="row">
                  <div class="col-6">
                    <ul class="star-part-2">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="col-6 p-0">
                    <span class="rev-35">(35 Reviews)</span>
                  </div>
                </div>
                <p class="mt-2"><i class="fa-solid fa-location-dot"></i> Dubai, UAE <br>Connect Resources Firm</p>

              </div>
              <div class="col-2 text-right ">
                <i class="fa-solid fa-eye eye-pri"></i>
              </div>
            </div>
          </div>

          <div class="law-box">
            <div class="row  align-items-center">
              <div class="col-3 text-center m-p-0 over-n">
               <div class="sma-amse">
                 <img src="/new-design/assets/images/7.png" alt="Group">

               </div>
              </div>
              <div class="col-7">
                <h5>Arundhati Chawla</h5>
                <div class="row">
                  <div class="col-6">
                    <ul class="star-part-2">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="col-6 p-0">
                    <span class="rev-35">(35 Reviews)</span>
                  </div>
                </div>
                <p class="mt-2"><i class="fa-solid fa-location-dot"></i> Dubai, UAE <br>Yalem Firm</p>

              </div>
              <div class="col-2 text-right ">
                <i class="fa-solid fa-eye eye-pri"></i>
              </div>
            </div>
          </div>

          <div class="law-box">
            <div class="row  align-items-center">
              <div class="col-3 text-center m-p-0 over-n">
               <div class="sma-amse">
                 <img src="/new-design/assets/images/5.png" alt="Group">

               </div>
              </div>
              <div class="col-7">
                <h5>Rehan Abdul</h5>
                <div class="row">
                  <div class="col-6">
                    <ul class="star-part-2">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="col-6 p-0">
                    <span class="rev-35">(35 Reviews)</span>
                  </div>
                </div>
                <p class="mt-2"><i class="fa-solid fa-location-dot"></i> Dubai, UAE <br>Freelancer</p>

              </div>
              <div class="col-2 text-right ">
                <i class="fa-solid fa-eye eye-pri"></i>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 col-md-12">
          <div class="law-box prime">
            <div class="row  align-items-center">
              <div class="col-3 text-center m-p-0 over-n ">
               <dl$ git checkout  latest-1
Branch 'latest-1' set up to track remote branch 'latest-1' from 'origin'.
/div>
              </div>
              <div class="col-7">
                <h5>Jaidev Kumar</h5>
                <div class="row">
                  <div class="col-6">
                    <ul class="star-part-2">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="col-6 p-0">
                    <span class="rev-35">(35 Reviews)</span>
                  </div>
                </div>
                <p class="mt-2"><i class="fa-solid fa-location-dot"></i> Dubai, UAE <br>Freelancer</p>
                l$ git checkout  latest-1
Branch 'latest-1' set up to track remote branch 'latest-1' from 'origin'.

              </div>
              <div class="col-2 text-end ">
                <i class="fa-solid fa-eye eye-pri"></i>
              </div>
            </div>
          </div>

          <div class="law-box">
            <div class="row  align-items-center">
              <div class="col-3 text-center m-p-0 over-n">
               <div class="sma-amse">
                 <img src="/new-design/assets/images/4.png" alt="Group">

               </div>
              </div>
              <div class="col-7">
                <h5>Arundhati Chawla</h5>
                <div class="row">
                  <div class="col-6">
                    <ul class="star-part-2">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="col-6 p-0">
                    <span class="rev-35">(35 Reviews)</span>
                  </div>
                </div>
                <p class="mt-2"><i class="fa-solid fa-location-dot"></i> Dubai, UAE <br>Connect Resources Firm</p>

              </div>
              <div class="col-2 text-right ">
                <i class="fa-solid fa-eye eye-pri"></i>
              </div>
            </div>
          </div>

          <div class="law-box">
            <div class="row  align-items-center">
              <div class="col-3 text-center m-p-0 over-n">
               <div class="sma-amse">
                 <img src="/new-design/assets/images/7.png" alt="Group">

               </div>
              </div>
              <div class="col-7">
                <h5>Arundhati Chawla</h5>
                <div class="row">
                  <div class="col-6">
                    <ul class="star-part-2">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="col-6 p-0">
                    <span class="rev-35">(35 Reviews)</span>
                  </div>
                </div>
                <p class="mt-2"><i class="fa-solid fa-location-dot"></i> Dubai, UAE <br>Freelancer</p>

              </div>
              <div class="col-2 text-right ">
                <i class="fa-solid fa-eye eye-pri"></i>
              </div>
            </div>
          </div>

          <div class="law-box">
            <div class="row  align-items-center">
              <div class="col-3 text-center m-p-0 over-n">
               <div class="sma-amse">
                 <img src="/new-design/assets/images/6.png" alt="Group">

               </div>
              </div>
              <div class="col-7">
                <h5>William Wright</h5>
                <div class="row">
                  <div class="col-6">
                    <ul class="star-part-2">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="col-6 p-0">
                    <span class="rev-35">(35 Reviews)</span>
                  </div>
                </div>
                <p class="mt-2"><i class="fa-solid fa-location-dot"></i> Dubai, UAE <br>KingLawyers Firm</p>

              </div>
              <div class="col-2 text-right ">
                <i class="fa-solid fa-eye eye-pri"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center  was-validated">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" aria-label="Previous">
              <span aria-hidden="true"> <img src="/new-design/assets/image/practice-area/Vector (2).png" alt=""> </span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
          <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
          <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" aria-label="Next">
              <span aria-hidden="true"> <img src="/new-design/assets/image/practice-area/Vector (3).png" alt=""> </span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</section>


<section>
  <div class="container">
    <div class="need-lawyer">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="eles">
            <div class="row">
              <div class="col-10">
                <h4>Looking for something else?</h4>
              </div>
              <div class="col-2 m-p-0">
                <img src="/new-design/assets/image/practice-area/vector-8.png" alt="vector-8" class="vector-8">
              </div>
            </div>

            <div class="links-icons">
            <textarea placeholder="Describe your legal issue here..."></textarea>
              <div class="links">
                <a href="#"><i class="fa-regular fa-face-smile"></i></a>
                <a href="#"><i class="fa-solid fa-paperclip"></i></a>
              </div>
            </div>

              <ul class="post-1">
                <li><a href="#"><img src="/new-design/assets/image/practice-area/post-3.png" alt="post-3"> Post a question</a></li>
                <li><a href="#"><img src="/new-design/assets/image/practice-area/post-2.png" alt="post-2"> Chat online</a></li>
                <li><a href="#"><img src="/new-design/assets/image/practice-area/post-1.png" alt="post-1"> Hire a Lawyer</a></li>
              </ul>

          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="abu">
            <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-3 col-4 m-p-0">
                <div class="d-flex-right dn">
                  <div class="cards needs">
                    <img src="/new-design/assets/images/5.png" alt="Group">
                     <p class="name-uaser">Arundhati</p>
                      <p class="short-mes">UAE, Abu Dhabi</p>
                  </div>  
                </div>
              </div>
              <div class="col-sm-3 col-4 m-p-0">
                <div class="d-flex-right">
                  <div class="cards needs">
                    <img src="/new-design/assets/images/3.png" alt="Group">
                     <p class="name-uaser">Arundhati</p>
                      <p class="short-mes">UAE, Abu Dhabi</p>
                  </div>  
                </div>
              </div>
              <div class="col-sm-3 col-4 m-p-0">
                <div class="d-flex-right">
                  <div class="cards needs">
                    <img src="/new-design/assets/image/practice-area/Group.png" alt="Group">
                     <p class="name-uaser">Arundhati</p>
                      <p class="short-mes">UAE, Abu Dhabi</p>
                  </div> 

                  <div class="cards needs alg">
                    <img src="/new-design/assets/images/8.png" alt="Group">
                     <p class="name-uaser">Arundhati</p>
                      <p class="short-mes">UAE, Abu Dhabi</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="Hire">
              <div class="row">
                <div class="col-sm-9">
                   <h5>Need a Lawyer?</h5>
                  <p>Hire lawyers online. Buy fixed-fee legal services or submit your request and get <b>multiple competitive offers</b> from qualified lawyers.</p>
                </div>
              </div>
               <ul class="post-1 text-left">
                  <li><a href="#"><img src="/new-design/assets/image/practice-area/post-3.png" alt="post-3"> Post a question</a></li>
                  <li><a href="#"><img src="/new-design/assets/image/practice-area/post-2.png" alt="post-2"> Chat online</a></li> 
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
</div>

@endsection