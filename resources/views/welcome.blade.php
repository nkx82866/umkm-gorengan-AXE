@extends('layout')

@section('title', 'Gorengan Pak Hariyadi')

@section('content')
<div class="upper-home-body">
    <div class="card-logo">
        <img src="{{ asset('image/Logo_2.jpeg') }}" class="card-img-top" alt="..." style="width: 280px; height: 280px; border-radius: 50%;">
    </div>
</div>

<div class="container-for-bg-img">
    <div class="card-background-img">
        <img src="{{ asset('image/Home_1.jpeg')}}" class="card-img-top" alt="...">
    </div>
</div>

{{-- ==================== Carousel ==================== --}}
<section>
    <p class="menu-title">MENU</p>
    <img ... class="bg-image>">
    <div class="carousel-container">
        <div class="carousel">
            <div class="gorengan-1">
                <img src="{{ asset('image/Gorengan-1.jpeg')}}" class="carousel-image" alt="...">
                <p class="text-goreng">Ubi Goreng <p class="text-harga">Rp2.000</p> </p>
            </div>
            <div class="Gorengan-2">
                <img src="{{ asset('image/Bakwan_Goreng.jpeg')}}" class="carousel-image" alt="...">
                <p class="text-goreng">Bakwan Goreng <p class="text-harga">Rp2.000</p></p>
            </div>
            <div class="Gorengan-3">
                <img src="{{ asset('image/Gorengan-2.jpeg')}}" class="carousel-image" alt="...">
                <p class="text-goreng">Tahu isi <p class="text-harga">Rp2.000</p></p>
            </div>
            <div class="Gorengan-4">
                <img src="{{ asset('image/Gorengan-3.jpg')}}" class="carousel-image" alt="...">
                <p class="text-goreng">Tahu <p class="text-harga">Rp2.000</p></p>
            </div>
            <div class="Gorengan-4">
                <img src="{{ asset('image/pisang_goreng.jpeg')}}" class="carousel-image" alt="...">
                <p class="text-goreng">Pisang Goreng <p class="text-harga">Rp2.000</p></p>
            </div>
            <div class="Gorengan-6">
                <img src="{{ asset('image/tempe_goreng.jpeg')}}" class="carousel-image" alt="...">
                <p class="text-goreng">Tempe Goreng <p class="text-harga">Rp5.000</p></p>
            </div>
            <div class="Gorengan-7">
                <img src="{{ asset('image/Lumpia.jpeg')}}" class="carousel-image" alt="...">
                <p class="text-goreng">Tempe Goreng <p class="text-harga">Rp5.000</p></p>
            </div>
        </div>
        <a class="view-all {{ Route::is('menu') ? 'active' : '' }}" href="{{ url('/menu') }}" style="text-decoration: none">View All</a>
    </div>
</section>


{{-- ================================MAPS=============================== --}}
<div class="container d-flex justify-content-center align-items-center">
    <div class="row w-100 map-section">
        <div class="col-lg-6 my-4 d-flex align-items-center text-section">
            <div class="text-map">
                <h3>Gorengan Pak Hariyadi berada di samping Alfamart Taman Kota</h3>
                <p>Toko gorengan ini sudah buka bertahun-tahun dan menjadi langganan banya orang.</p>
                <p>Website ini dibuat dengan Mahasiswa UIB dari jurusan Sistem Informasi yang memfokuskan di pengembangan mahasiswa</p>
            </div>
        </div>
        <div class="col-lg-6 my-4 map-google">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.31572514595828!2d104.0042645484209!3d1.123274389159377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98bdc81e9aead%3A0x22c641bdce2bc6a2!2sAlfamart!5e0!3m2!1sen!2sid!4v1717783448947!5m2!1sen!2sid" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>



{{-- =========================COMMENT========================== --}}

<section class="comment-border">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
                <div class="col-sm-5 col-md-6 col-12 pb-4">
                    <h1 class="head-head-head">Comments</h1>
                    <div class="doll-comment">
                        <div class="comment mt-4 text-justify float-left">
                            <img src="{{ asset('image/profile.jpg')}}" width="40" height="40" class="rounded-circle" alt=""> 
                            <h4>Joni</h4>
                            <span>- 20 Januari, 2024</span>
                            <br>
                            <p>Gorengan nya harum</p>
                        </div>
                        <div class="text-justify darker mt-4 float-right">
                            <img src="{{ asset('image/profile.jpg')}}" width="40" height="40" class="rounded-circle" alt=""> 
                            <h4>Roby</h4>
                            <span>- 29 Januari, 2024</span>
                            <br>
                            <p>Gorengan nya gurih</p>
                        </div>
                        <div class="comment mt-4 text-justify">
                            <img src="{{ asset('image/profile.jpg')}}" width="40" height="40" class="rounded-circle" alt=""> 
                            <h4>Firado</h4>
                            <span>- 20 Februari, 2024</span>
                            <br>
                            <p>Gorengan nya murah tapi enak</p>
                        </div>
                        <div class="darker mt-4 text-justify">
                            <img src="{{ asset('image/profile.jpg')}}" width="40" height="40" class="rounded-circle" alt=""> 
                            <h4>Rudi Simpson</h4>
                            <span>- 24 February, 2024</span>
                            <br>
                            <p >Makanan nya enak</p>
                        </div>
                    </div>
                </div>
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
            <form class="form-comment" action="{{ route('comments.store') }}" method="POST" id="align-form">
                @csrf
                <div class="form-group">
                    <h4>comment</h4>
                    <label for="message">Message</label>
                    <textarea name="message" id="msg" cols="30" rows="5" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="fullname">Name</label>
                    <input type="text" name="name" id="fullname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="container-button-post">
                    <div class="form-group">
                        <button type="submit" class="btn" id="post">Post Comment</button>
                    </div>
                </div>
            </form>
                <div class="existing-comment-comment">
                <!-- Display existing comments -->
                @if(isset($comments) && $comments->count() > 0)
                        @foreach($comments as $comment)
                            <div class="comment">
                                <h4>{{ $comment->name }}</h4>
                                <span>{{ $comment->created_at->format('F d, Y') }}</span>
                                <p>{{ $comment->message }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>


@endsection


@section('styles')
<style>
    .upper-home-body {
        background-color: #fff0c3;
        display: flex;
        justify-items: center;
        justify-content: center; /* Horizontal auto center */
    }

    body {
        background-color: #fff0c3;
    }

    .card-logo{
        margin: 10px;
    }

    .container-for-bg-img{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }


    .card-background-img {
        display: flex;  
        flex-direction: column;
        align-items: center;  
        justify-content: center;
        width: 100%;
        height: 550px;
        border: black 1px solid;
        margin: 10px 20px;
    }

    .card-background-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    /* Carousel */
    section{  
        height: 100%;
        display: flex;  
        flex-direction: column;
        align-items: center;  
        justify-content: center;
    }

    .menu-title {
        position: relative;
        display: flex;
        top: 10px;
        right: 646px;
        font-size: 50px;
        font-weight: bold;
    }
    .carousel {
        display: flex;
        max-width:1380px;
        gap:20px; 
    }
    .carousel.sliding-transition {
        transition: transform 0.5s ease-in-out;
    }
    .carousel-image {
        -webkit-box-shadow: 5px 5px 5px 0px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: 5px 5px 5px 0px rgba(0, 0, 0, 0.5);
        box-shadow: 5px 5px 5px 0px rgba(0, 0, 0, 0.5);
        height: 240px;
        object-fit: cover;
        border-radius: 24px
    }

    .bg-image {
        position:absolute;
        inset:0;
        width:100%;
        height:100%;
        filter: blur(8px);
        -webkit-filter: blur(8px);
        transform:scale(1.1);
        object-fit:cover;
    }

    .carousel-container {
        position: relative;
        padding: 30px;
        padding-bottom: 50px;
        border-radius: 18px;
        background-color: white;
        overflow: hidden;
    }

    .text-goreng{
        text-align: left;
        margin: 5px 0;
        font-family: Trebuchet MS (sans-serif);
        font-size: 20px;
        font-weight: 500;
        line-height: 36px;
    }
    .text-harga{
        position: relative;
        left: 7px;
        top: -14px;
        color: #747474;
        font-size: 14px;
        font-weight: 500;
        line-height: 36px;
    }

    .view-all{
        position: relative;
        background-color: #fff0c3;
        color: #000000;
        cursor: pointer;
        width: 120px;
        font-size: 28px;
        display: flex;
        justify-content: center;
        border: none;
        border-radius: 20px;
        margin-left: auto;
    }


    /* ===== MAP SECTION ===== */
    .map-section{
        padding: 20px 35px;
    }

    .map-goole {
        position: relative;
        left: 50px;
        padding: 10px;
    }

    .text-section{
        position: relative;
        right: 50px;
        padding: 10px;
    }

    .text-map{
        font-family: Trebuchet MS (sans-serif);
        font-size: 26px;
        font-weight: 400;
        line-height: 36px;
        text-align: center;
    }


/* =================== COMMENT =============== */
    .navbar-nav{
    width: 100%;
}

@media(min-width:568px){
    .end{
        margin-left: auto;
    }
}

@media(max-width:768px){
    #post{
        width: 100%;
    }
}
#clicked{
    padding-top: 1px;
    padding-bottom: 1px;
    text-align: center;
    width: 100%;
    background-color: #ecb21f;
    border-color: #a88734 #9c7e31 #846a29;
    color: black;
    border-width: 1px;
    border-style: solid;
    border-radius: 13px; 
}

#profile{
    background-color: unset;
    
} 

#post{
    margin: 10px;
    padding: 6px;
    padding-top: 2px;
    padding-bottom: 2px;
    text-align: center;
    background-color: #ecb21f;
    border-color: #a88734 #9c7e31 #846a29;
    color: black;
    border-width: 1px;
    border-style: solid;
    border-radius: 8px;
    width: 50%;
}

.container-button-post{
    position: relative;
    right: 6px;
    padding-top: 10px;
}

#nav-items li a,#profile{
    text-decoration: none;
    color: rgb(224, 219, 219);
    background-color: black;
}


.comments{
    margin-top: 5%;
    margin-left: 20px;
}

.darker{
    border: 1px solid #ecb21f;
    background-color: black;
    float: right;
    border-radius: 5px;
    padding-left: 40px;
    padding-right: 30px;
    padding-top: 10px;
}

.comment{
    border: 1px solid rgba(16, 46, 46, 1);
    background-color: rgba(16, 46, 46, 0.973);
    float: left;
    border-radius: 5px;
    padding-left: 40px;
    padding-right: 30px;
    padding-top: 10px;
    
}
.comment h4,.comment span,.darker h4,.darker span{
    display: inline;
}

.comment p,.comment span,.darker p,.darker span{
    color: rgb(184, 183, 183);
}

h1,h4{
    color: white;
    font-weight: bold;
}
label{
    color: rgb(212, 208, 208);
}

#align-form{
    height: 540px;
    position: relative;
    top: 35px;
    margin-top: 20px;
}
.form-group p a{
    color: white;
}

.form-group h4{
    padding-top: 10px;
}
.form-group label {
    padding-top: 18px;
}

#checkbx{
    background-color: black;
}

#darker img{
    margin-right: 15px;
    position: static;
}

.form-group input,
.form-group textarea{
    color: rgb(0, 0, 0);
    background-color: rgb(255, 255, 255);
    border: 1px solid rgba(16, 46, 46, 1);
    border-radius: 12px;
    padding: 8px;
}

form{
    border: 1px solid rgba(16, 46, 46, 1);
    background-color: rgba(16, 46, 46, 0.973);
    border-radius: 5px;
    padding: 20px;
 }

 .comment-border {
    margin: 50px;
    border: white 12px solid;
    border-radius: 12px;
    padding: 20px; 
}

.doll-comment {
    position: relative;
    top: 50px; 
    width: 320px;
}

.form-comment{
    position: absolute;
    bottom: 300px;
    left: 840px;
    min-width: 360px;
}

.form-group{
    position: relative;
    bottom: 446px;
}

.head-head-head {
    color: black;
}

.existing-comment-comment {
    position: relative;
    right: 300px;
    bottom: 100px;
}

</style>
@endsection

@section('script')
<script>

document.addEventListener("DOMContentLoaded", function() {
    // Select the post button
    const postButton = document.getElementById("post");

    // Add event listener to the post button
    postButton.addEventListener("click", function() {
        // Select the input fields for name, email, and message
        const nameInput = document.getElementById("fullname");
        const emailInput = document.getElementById("email");
        const messageInput = document.getElementById("msg");

        // Get the values from the input fields
        const name = nameInput.value;
        const email = emailInput.value;
        const message = messageInput.value;

        // Validate if all fields are filled
        if (name.trim() === "" || email.trim() === "" || message.trim() === "") {
            alert("Please fill in all fields.");
            return;
        }

        // Construct the comment HTML
        const commentHTML = `
            <div class="comment mt-4 text-justify">
                <img src="{{ asset('image/profile.jpg') }}" width="40" height="40" class="rounded-circle" alt="">
                <h4>${name}</h4>
                <span>- ${getCurrentDate()}</span>
                <br>
                <p>${message}</p>
            </div>
        `;

        // Append the comment HTML to the comments section
        const commentsSection = document.querySelector(".comment-border");
        commentsSection.insertAdjacentHTML("beforeend", commentHTML);

        // Clear the input fields after posting
        nameInput.value = "";
        emailInput.value = "";
        messageInput.value = "";
    });

    // Function to get the current date in the format "DD Month, YYYY"
    function getCurrentDate() {
        const date = new Date();
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        return date.toLocaleDateString('en-US', options);
    }

    const profileImageUrl = "{{ asset('image/profile.jpg') }}";

    document.addEventListener("DOMContentLoaded", function() {
        // Select the post button
        const postButton = document.getElementById("post");

        // Add event listener to the post button
        postButton.addEventListener("click", function() {
            // Rest of your JavaScript code
            // Replace "{{ asset('image/profile.jpg') }}" with "profileImageUrl" in the commentHTML
        });
    });
});
    </script>
@endsection
