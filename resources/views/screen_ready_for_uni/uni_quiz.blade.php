@include('screen_ready_for_uni.include.header')
<style>
    #quiz-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        /* #quiz-result
        {
            display: none;
        } */
</style>
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('screen_ready_for_uni.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid">
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <!-- Breadcubs Area End Here -->
                    <!-- Student Table Area Start Here -->
                    <div class="container">
                        <h1 class="mt-5 mb-4 text-center">Quizzes</h1>
                        <form id="quiz-form">
                                <div id="quiz-result" class="alert alert-success"></div>
                            <div class="card-deck">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="question">
                                            <h4>Question 1:</h4>
                                            <p>What is the capital of France?</p>
                                            <div class="">
                                                <input type="radio" name="q1" id="q1Option1" value="Paris">
                                                <label  for="q1Option1">Paris</label>
                                            </div>
                                            <div class="">
                                                <input type="radio" name="q1" id="q1Option2" value="London">
                                                <label  for="q1Option2">London</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="card">
                                    <div class="card-body">
                                        <div class="question">
                                            <h4>Question 2:</h4>
                                            <p>What is the largest planet in our solar system?</p>
                                            <div class="">
                                                <input type="radio" name="q2" id="q2Option1" value="Jupiter">
                                                <label  for="q2Option1">Jupiter</label>
                                            </div>
                                            <div class="">
                                                <input type="radio" name="q2" id="q2Option2" value="Mars">
                                                <label  for="q2Option2">Mars</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="card">
                                    <div class="card-body">
                                        <div class="question">
                                            <h4>Question 3:</h4>
                                            <p>What is the chemical symbol for gold?</p>
                                            <div class="">
                                                <input type="radio" name="q3" id="q3Option1" value="Au">
                                                <label  for="q3Option1">Au</label>
                                            </div>
                                            <div class="">
                                                <input type="radio" name="q3" id="q3Option2" value="Ag">
                                                <label  for="q3Option2">Ag</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <!-- Add more cards for additional questions -->
                            <!-- Ensure that each row has a maximum of three cards -->
                
                            <div class="col-12 form-group mt-4 text-center">
                                <button type="submit" class="btn btn-success btn-lg">Submit Quiz</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>

        @include('screen_ready_for_uni.include.footer')
        <script>
            const quizForm = document.getElementById('quiz-form');
            const resultDiv = document.getElementById('quiz-result'); // Get the result div
    
            quizForm.addEventListener('submit', function (e) {
                e.preventDefault();
    
                // Define the correct answers for each question
                const correctAnswers = {
                    q1: 'Paris',
                    q2: 'Jupiter',
                    q3: 'Au',
                    // Add more questions and their correct answers here
                };
    
                // Calculate and display the score
                let score = 0;
                const questions = document.querySelectorAll('.question');
    
                questions.forEach((question, index) => {
                    const selectedOption = question.querySelector('input:checked');
    
                    if (selectedOption) {
                        const userAnswer = selectedOption.value;
                        const questionName = selectedOption.name;
    
                        if (userAnswer === correctAnswers[questionName]) {
                            score++;
                        }
                    }
                });
    
                // Display the score in the result div
                resultDiv.textContent = `You scored ${score} out of ${questions.length} questions.`;
    
                // You can send this score to your server for storage and reporting.
            });
        </script>
