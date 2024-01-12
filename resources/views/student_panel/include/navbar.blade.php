<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    nav {
        background-color: #ffae01;
        color: white
    }

    nav img {
        width: 150px;
        cursor: pointer;
    }

    nav a,
    nav a:hover {
        text-decoration: none;
        color: white
    }
</style>
<nav class="navbar justify-content-between pt-4 pb-4">
    <div class="container">
        <a href="{{ route('student-screens') }}"><img src="/main_assets/img/logo3.png" alt="logo"></a>
        <div class="text-center">
            "{{ @session('student_first_name') }}"
           <br>
          <span>GR : {{ @session('student_gr') }}</span> <br>
          <span>Email : {{ @session('student_email') }}</span>
        </div>  
        <div>
            <a href="{{ route ('student-logout') }}">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                Logout
            </a>


        </div>
    </div>
</nav>