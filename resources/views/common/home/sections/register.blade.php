<section class="section home-section9">
    <div class="home-section-9-grid">
        <div class="home-section-9-item1">
            <p class="s9-block-h d-blue">Why Register?</p>
            <p class="s9-block-p">Keep the history of all your chats, questions and callback requests. Adding a lorem ipsum here.</p>
            <span class="material-symbols-rounded d-blue" id="s9-block-h">arrow_circle_right</span>
        </div>
        <div class="home-section-9-item2">
            <div class="s9-block">
                <div class="s9-flex">
                    <span class="material-symbols-rounded s9-flex-icon green green2">chat</span>
                    <p class="s9-flex-p">Keep the history of all your chats, questions and callback requests</p>
                </div>
                <div class="s9-flex">
                    <span class="material-symbols-rounded s9-flex-icon d-blue bg-l-blue">notifications</span>
                    <p class="s9-flex-p">Track your interactions with lawyers and receive notifications</p>
                </div>
                <div class="s9-flex">
                    <span class="material-symbols-rounded s9-flex-icon brown bg-yellow">back_hand</span>
                    <p class="s9-flex-p">Ask lawyers follow-up questions if something is not clear from their answers</p>
                </div>
                </div>
        </div>
        <div class="home-section-9-item3">
            <div class="s9-grid">
                <div class="s9-grid-item1">
                    <div class="s9-grid-s1-logo">
                        <img style="max-width: 3.5rem;" src="/images/basicImages/s9-logo.png" alt=""/>
                    </div>
                    <div class="s9-grid-s1-body">
                    <div class="s9-grid-s1-group">
                        <p class="s9-grid-s1-h">Are you a lawyer?</p>
                        <p class="s9-grid-s1-p">Be found. Register with us and get new leads every day. Adding more lorem ipsum and will be remplaced for the final text.</p>
                        <div class="s9-grid-s1-button">
                            <a class="registernow white" href="/home/registerLawyer.html">Register as lawyer<div class="h-100 bg-green"><i class="fas fa-arrow-right"></i></div></a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="s9-grid-item2">
                    <p class="s9-grid-s2-t">
                        Get Started
                    </p>
                    <p class="s9-grid-s2-st">
                        Already have account? <a class='linkStyle w-700'>Sign in</a>
                    </p>
                    <!-- <form class="s9-form" action="/register" method="post"> -->
                    <form class="s9-form" action="{{route('user.register')}}" method="post">
                        @csrf()
                        <div><label for="name">Name</label></div>
                        <input
                            name="name"
                            type="text"
                            id="standard-name"
                            label="Name"
                            placeholder="Enter your name"
                        />
                        @error('name')
                            <span class="error-msg" style="color:red;">{{ $message }}</span>
                        @enderror  
                        <div><label for="email">Email Address</label></div>
                        <input
                            name="email"
                            type="email"
                            id="standard-email"
                            label="Email Address"
                            placeholder="email@domain.com"
                        />
                        @error('email')
                            <span class="error-msg" style="color:red;">{{ $message }}</span>
                        @enderror  
                        <div><label for="password">Password</label></div>
                        <input
                            name="password"
                            id="standard-password-input"
                            label="Password"
                            placeholder="........."
                            type="password"
                        />
                        @error('password')
                            <span class="error-msg" style="color:red;">{{ $message }}</span>
                        @enderror                              
                        <button class="s9-signup" type='submit'>Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>