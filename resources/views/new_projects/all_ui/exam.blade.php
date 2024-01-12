@include('new_projects.include.header')

<style>
    .question {
        margin: 10px;
    }

    .answer {
        padding: 10px;
    }

    button {
        margin: 10px;
    }

    .first {
        display: none;
        height: 300px;
        width: 200px;
        margin-top: 10px;
    }
</style>
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('new_projects.include.navbar')
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <!-- Button trigger modal -->

            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Examination</h3>
                        </div>
                    </div>
                    <!-- Add new Book Form -->
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="question" id="q1">
                                        <p>
                                            1. Concept of a work of art is called
                                        </p>
                                        <div class="answer" id="a1"
                                            style="
                                            display: inline-grid;">
                                            <button class="btn btn-primary btn-lg q1b" id="a1-1" value="1">
                                                illustration
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a1-2" value="2">
                                                design
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a1-3" value="2">
                                                space
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a1-4" value="2">
                                                value
                                            </button>

                                        </div>
                                    </div>
                                    <div class="question" id="q2">
                                        <p>
                                            4. Nearer view of an Image is called
                                        </p>
                                        <div class="answer" id="a2"
                                            style="
                                            display: inline-grid;
                                        ">
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                foreground
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                background
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="1">
                                                contact
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                depth of field
                                            </button>
                                        </div>
                                    </div>
                                    <div class="question" id="q3">
                                        <p>
                                            7. Gesture Drawing is
                                        </p>
                                        <div class="answer" id="a2"
                                            style="
                                            display: inline-grid;
                                        ">
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                movement of action
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="1">
                                                landscapes
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                geometric drawing
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                none of the above
                                            </button>
                                        </div>
                                    </div>
                                    <div id="getResult">
                                        <button class="btn btn-lg btn-warning scoreButton">Get your score</button>
                                    </div>
                                    <div class="score">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="question" id="q1">
                                        <p>
                                            2. Forms repeated in a design is called
                                        </p>
                                        <div class="answer" id="a1"
                                            style="
                                            display: inline-grid;">
                                            <button class="btn btn-primary btn-lg q1b" id="a1-1" value="1">
                                                illustration
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a1-2" value="2">
                                                pattern
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a1-3" value="2">
                                                variety
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a1-4" value="2">
                                                unity
                                            </button>

                                        </div>
                                    </div>
                                    <div class="question" id="q2">
                                        <p>
                                            5. Difference in color and light is
                                        </p>
                                        <div class="answer" id="a2"
                                            style="
                                            display: inline-grid;
                                        ">
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                harmony
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                contrast
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="1">
                                                unity
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                balance
                                            </button>
                                        </div>
                                    </div>
                                    <div class="question" id="q3">
                                        <p>
                                            8. Three-dimensional means
                                        </p>
                                        <div class="answer" id="a2"
                                            style="
                                            display: inline-grid;
                                        ">
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                height, width, and depth.
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="1">
                                                height, and width
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                height, and depth
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                none of the above
                                            </button>
                                        </div>
                                    </div>
                                    <div id="getResult">
                                        <button class="btn btn-lg btn-warning scoreButton">Get your score</button>
                                    </div>
                                    <div class="score">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="question" id="q1">
                                        <p>
                                            3. The arrangement of the visual elements is
                                        </p>
                                        <div class="answer" id="a1"
                                            style="
                                            display: inline-grid;">
                                            <button class="btn btn-primary btn-lg q1b" id="a1-1" value="1">
                                                composition
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a1-2" value="2">
                                                unity
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a1-3" value="2">
                                                harmony
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a1-4" value="2">
                                                contrast
                                            </button>

                                        </div>
                                    </div>
                                    <div class="question" id="q2">
                                        <p>
                                            6. Surface Quality of a design is
                                        </p>
                                        <div class="answer" id="a2"
                                            style="
                                            display: inline-grid;
                                        ">
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                foreground
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                background
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="1">
                                                contact
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                depth of field
                                            </button>
                                        </div>
                                    </div>
                                    <div class="question" id="q3">
                                        <p>
                                            9. Which one of the following is not related to image format?
                                        </p>
                                        <div class="answer" id="a2"
                                            style="
                                            display: inline-grid;
                                        ">
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                jpeg
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="1">
                                                tiff
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                wav
                                            </button>
                                            <button class="btn btn-primary btn-lg q1b" id="a2-2" value="2">
                                                bmp
                                            </button>
                                        </div>
                                    </div>
                                    <div id="getResult">
                                        <button class="btn btn-lg btn-warning scoreButton">Get your score</button>
                                    </div>
                                    <div class="score">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="justify-content-center m-auto">

                {{-- @include('main_super_admin.dashboard.include.poweredby') --}}
            </div>
        </div>
    </div>
@include('new_projects.include.poweredby')

    <!-- Page Area End Here -->
</div>

@include('new_projects.include.footer')

<script>
    // global variable to hold total score
    var total = 0;

    // begin plugin to handle each answer
    $.fn.answer = function() {

        // for this element, listen for a click event, then run the onClick function
        this.click(onClick)

        // define the onClick function
        function onClick() {

            // get value from the clicked button and store in the varialble val
            var val = $(this).val();

            // if val is equal to one...
            if (val == 1) {

                // ...add one to the total variable...
                total++

                // ...change the color of the button from blue to green, add some html to the end of the div and unbind the event to prevent buttons for this question from being clicked again
                $(this).removeClass('btn-primary').addClass('btn-success').parent().append('<h2>Correct!</h2>')
                    .find('button').unbind();;
            }

            // if val does not equal one, change button from blue to red, add some html and unbind the event
            else {
                $(this).removeClass('btn-primary').addClass('btn-danger').parent().append('<h3>Wrong!</h3>').find(
                    'button').unbind();
            };

        };
    };
    // end of answer plugin

    // begin plugin to calculate the final score and display one of a range of images
    $.fn.calcScore = function() {
        this.click(onClick)

        function onClick() {

            // if the score is equal to or less than 4, do the following
            if (total == 0) {
                // add some html to the end of the score element
                $('.score').append('<h2>You got ' + total + ' right. WTF loser.');
                // find the first element and slidedown to reveal it
                $('.first').slideDown();

            } else if (total > 0 && total <= 4) {
                // add some html to the end of the score element
                $('.score').append('<h2>You got ' + total + ' right!');
                // find the first element and slidedown to reveal it
                $('.first').slideDown();
            }
            // if total is greater than or equal to 5 AND less than or equal to 9, do the following
            else if (total >= 5 && total <= 9) {
                // repeat function contents from above with different image reveal
            };

            // etc etc for other score brackets

            // unbind the click event
            $(this).unbind();
        };
    };
    // end of calcScore plugin

    // call answer plugin on each question
    $('.q1b').answer();

    // call calcScore plugin on score button
    $('.scoreButton').calcScore();
</script>
