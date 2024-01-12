@include('screen_ready_for_uni.include.header')
<style>
    .form-control
    {
        font-size: 1.3rem!important;
    }
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
                    <div class="container mt-4">
                        <h1 class="mb-4 text-center">Faculty & Discipline Management</h1>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Manage Disciplines</h3>
                                        <ul class="list-group" id="discipline-list">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                Computer Science
                                                <button class="btn btn-danger  remove-button">Remove</button>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                Physics
                                                <button class="btn btn-danger  remove-button">Remove</button>
                                            </li>
                                            <!-- Add more disciplines here -->
                                        </ul>
                                        <div class="input-group mt-3">
                                            <input type="text" id="discipline-input" class="form-control"
                                                placeholder="Add a new discipline">
                                            <div class="input-group-append">
                                                <button id="add-discipline" class="btn btn-primary">Add
                                                    Discipline</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Manage Faculty</h3>
                                        <div class="input-group mb-3">
                                            <input type="text" id="faculty-input" class="form-control"
                                                placeholder="Enter faculty name">
                                            <select id="discipline-selection" class="custom-select form-control">
                                                <option value="Computer Science">Computer Science</option>
                                                <option value="Physics">Physics</option>
                                                <!-- Add more disciplines here -->
                                            </select>
                                            <div class="input-group-append">
                                                <button id="add-faculty" class="btn btn-primary">Add Faculty</button>
                                            </div>
                                        </div>
                                        <ul class="list-group" id="faculty-list">
                                            <!-- Faculty members will be added here dynamically -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>
        @include('screen_ready_for_uni.include.footer')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const addDisciplineButton = document.getElementById('add-discipline');
                const disciplineList = document.getElementById('discipline-list');

                addDisciplineButton.addEventListener('click', function() {
                    const disciplineInput = document.getElementById('discipline-input');
                    const newDiscipline = disciplineInput.value;

                    if (newDiscipline) {
                        const listItem = document.createElement('li');
                        listItem.className =
                        'list-group-item d-flex justify-content-between align-items-center';

                        listItem.innerHTML = `
                            ${newDiscipline}
                            <button class="btn btn-danger  remove-button">Remove</button>
                        `;

                        disciplineList.appendChild(listItem);
                        disciplineInput.value = '';
                    }
                });

                disciplineList.addEventListener('click', function(event) {
                    if (event.target.classList.contains('remove-button')) {
                        event.target.parentElement.remove();
                    }
                });

                const addFacultyButton = document.getElementById('add-faculty');
                const facultyList = document.getElementById('faculty-list');

                addFacultyButton.addEventListener('click', function() {
                    const facultyInput = document.getElementById('faculty-input');
                    const disciplineSelection = document.getElementById('discipline-selection');
                    const facultyName = facultyInput.value;
                    const selectedDiscipline = disciplineSelection.value;

                    if (facultyName) {
                        const facultyListItem = document.createElement('li');
                        facultyListItem.className =
                            'list-group-item d-flex justify-content-between align-items-center';

                        facultyListItem.innerHTML = `
                            ${facultyName}
                            Discipline: ${selectedDiscipline}
                            <button class="btn btn-danger  remove-button">Remove</button>
                        `;

                        facultyList.appendChild(facultyListItem);
                        facultyInput.value = '';
                    }
                });

                facultyList.addEventListener('click', function(event) {
                    if (event.target.classList.contains('remove-button')) {
                        event.target.parentElement.remove();
                    }
                });
            });
        </script>
