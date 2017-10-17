@push('hoisted-scripts')
<script type='text/javascript'>
// singleton
let instance = null;

class WidgetCore {

        constructor(role){
            if(!instance){
                instance = this;
            }
            
            this._role = role;
            return instance;
        }
        
        // properties in getter - setter notation
        get role(){
            return this._role;
        }
        set role(value){
            this.role = value;
        }
        
        get initialized(){
            return this._initialized;
        }
        set initialized(value){
            this._initialized = value;
        }
        
        get selected_course() {
            return this._selected_course;
        }
        set selected_course(value) {
            this._selected_course = value;
        }
        
        get selected_student() {
            return this._selected_student;
        }
        set selected_student(value) {
            this._selected_student = value;
        }

        get selected_assessment() {
            return this._selected_assessment;
        }
        set selected_assessment(value) {
            this._selected_assessment = value;
        }

        // data to be wired up to AJAX calls later
        get courses() {
            return [
                {
                    "course_id": "FBN1501",
                    "description": "FBN1501 - Business Numerical Skills A"
                },
                {
                    "course_id": "FBN1502",
                    "description": "FBN1502 - Business Numerical Skills B"
                }
            ];
        }

        get assessment_types() {
            return [
                {
                    "assessment_type_id": "SA-ALL",
                    "assessment": "SA",
                    "description": "ALL"
                },
                {
                    "assessment_type_id": "SA-MCQ",
                    "assessment": "SA",
                    "description": "MCQ"
                },
                {
                    "assessment_type_id": "SA-VEN",
                    "assessment": "SA",
                    "description": "Venue Based"
                },
                {
                    "assessment_type_id": "SA-POR",
                    "assessment": "SA",
                    "description": "Portfolio"
                },
                {
                    "assessment_type_id": "FA-ALL",
                    "assessment": "FA",
                    "description": "ALL"
                },
                {
                    "assessment_type_id": "FA-ASS1",
                    "assessment": "FA",
                    "description": "Assignment 1"
                },
                {
                    "assessment_type_id": "FA-ASS2",
                    "assessment": "FA",
                    "description": "Assignment 2"
                },
                {
                    "assessment_type_id": "FA-POR",
                    "assessment": "FA",
                    "description": "Portfolio"
                },
                {
                    "assessment_type_id": "FA-SA1",
                    "assessment": "FA",
                    "description": "Self-Assessment 1"
                },
                {
                    "assessment_type_id": "FA-SA2",
                    "assessment": "FA",
                    "description": "Self-Assessment 2"
                }
            ];
        };
        
        get assessments() {
            return [
                {
                    "course_id": "FBN1501",
                    "assessment_type_id": "SA-ALL",
                    "assessment": "SA",
                    "student_id": "ALL",
                    "description": "SA-ALL",
                    "value": "70"
                },
                {
                    "course_id": "FBN1501",
                    "assessment_type_id": "SA-1",
                    "assessment": "SA",
                    "student_id": "S1",
                    "description": "Self-Assessment 1",
                    "value": "35"
                },
                {
                    "course_id": "FBN1501",
                    "assessment_type_id": "SA-2",
                    "assessment": "SA",
                    "student_id": "S1",
                    "description": "Self-Assessment 2",
                    "value": "90"
                },
                {
                    "course_id": "FBN1501",
                    "assessment_type_id": "SA-3",
                    "assessment": "SA",
                    "student_id": "S1",
                    "description": "Self-Assessment 3",
                    "value": "66"
                },
                {
                    "course_id": "FBN1501",
                    "assessment_type_id": "SA-1",
                    "assessment": "SA",
                    "student_id": "S2",
                    "description": "Self-Assessment 1",
                    "value": "65"
                },
                {
                    "course_id": "FBN1501",
                    "assessment_type_id": "SA-2",
                    "assessment": "SA",
                    "student_id": "S2",
                    "description": "Self-Assessment 2",
                    "value": "50"
                },
                {
                    "course_id": "FBN1501",
                    "assessment_type_id": "SA-3",
                    "assessment": "SA",
                    "student_id": "S2",
                    "description": "Self-Assessment 3",
                    "value": "76"
                },
                {
                    "course_id": "FBN1501",
                    "assessment_type_id": "SA-1",
                    "assessment": "SA",
                    "student_id": "S3",
                    "description": "Self-Assessment 1",
                    "value": "49"
                },
                {
                    "course_id": "FBN1501",
                    "assessment_type_id": "SA-2",
                    "assessment": "SA",
                    "student_id": "S3",
                    "description": "Self-Assessment 2",
                    "value": "81"
                },
                {
                    "course_id": "FBN1501",
                    "assessment_type_id": "SA-3",
                    "assessment": "SA",
                    "student_id": "S3",
                    "description": "Self-Assessment 3",
                    "value": "56"
                },
                {
                    "course_id": "FBN1501",
                    "assessment_type_id": "FA-ALL",
                    "assessment": "FA",
                    "student_id": "ALL",
                    "description": "FA-ALL",
                    "value": "57"
                },
                {
                    "course_id": "FBN1501",
                    "assessment_type_id": "FA-ASS1",
                    "assessment": "FA",
                    "description": "Formal Assessment 1",
                    "value": "72"
                },
                {
                    "course_id": "FBN1501",
                    "assessment_type_id": "FA-ASS2",
                    "assessment": "FA",
                    "description": "Formal Assessmet 2",
                    "value": "66"
                }
            ];
        };
        
        get results() {
            return [
                // ALL FBN1501
                {
                    "course_id": "FBN1501",
                    "assessment": "SA",
                    "assessment_type_id": "SA-ALL",
                    "student_id": "ALL",
                    "labels": [],
                    "your_results": [0, 49, 65, 80, 56, 45, 0, 0, 0, 0, 0, 0],
                    "class_average": [0, 73, 62, 65, 59, 65, 0, 0, 0, 0, 0, 0],
                    "your_average": [0, 49.67, 69.75, 59, 56.67, 58.71, 0, 0, 0, 0, 0, 0]
                },
                {
                    "course_id": "FBN1501",
                    "assessment": "FA",
                    "assessment_type_id": "FA-ALL",
                    "student_id": "ALL",
                    "labels": [],
                    "your_results": [0, 59, 65, 60, 56, 45, 0, 0, 0, 0, 0, 0],
                    "class_average": [0, 63, 62, 65, 59, 65, 0, 0, 0, 0, 0, 0],
                    "your_average": [0, 59.67, 59.75, 59, 56.67, 58.71, 0, 0, 0, 0, 0, 0]
                },
                // ALL FBN1502
                {
                    "course_id": "FBN1502",
                    "assessment": "SA",
                    "assessment_type_id": "SA-ALL",
                    "student_id": "ALL",
                    "labels": [],
                    "your_results": [0, 0, 0, 0, 0, 0, 71, 59, 76, 62, 63, 0],
                    "class_average": [0, 0, 0, 0, 0, 0, 60, 75, 58, 55, 61, 0],
                    "your_average": [0, 0, 0, 0, 0, 0, 58.75, 60.67, 60.80, 61, 61.08, 0]
                },
                {
                    "course_id": "FBN1502",
                    "assessment": "FA",
                    "assessment_type_id": "FA-ALL",
                    "student_id": "ALL",
                    "labels": [],
                    "your_results": [0, 0, 0, 0, 0, 0, 51, 59, 76, 62, 63, 0],
                    "class_average": [0, 0, 0, 0, 0, 0, 60, 75, 58, 55, 61, 0],
                    "your_average": [0, 0, 0, 0, 0, 0, 48.75, 60.67, 60.80, 61, 61.08, 0]
                },
                // STUDENT ALL FBN1501
                {
                    "course_id": "FBN1501",
                    "assessment": "FA",
                    "assessment_type_id": "FA-ALL",
                    "student_id": "S1",
                    "labels": [],
                    "your_results": [0, 66, 60, 58, 55, 41, 0, 0, 0, 0, 0, 0],
                    "class_average": [0, 56, 82, 45, 69, 85, 0, 0, 0, 0, 0, 0],
                    "your_average": [0, 54, 85, 69, 66, 68, 0, 0, 0, 0, 0, 0]
                },
                {
                    "course_id": "FBN1501",
                    "assessment": "FA",
                    "assessment_type_id": "FA-ALL",
                    "student_id": "S2",
                    "labels": [],
                    "your_results": [0, 53, 70, 83, 61, 51, 0, 0, 0, 0, 0, 0],
                    "class_average": [0, 66, 48, 50, 69, 65, 0, 0, 0, 0, 0, 0],
                    "your_average": [0, 85, 41, 89, 84, 67, 0, 0, 0, 0, 0, 0]
                },
                {
                    "course_id": "FBN1501",
                    "assessment": "FA",
                    "assessment_type_id": "FA-ALL",
                    "student_id": "S3",
                    "labels": [],
                    "your_results": [0, 73, 67, 89, 46, 64, 0, 0, 0, 0, 0, 0],
                    "class_average": [0, 45, 46, 48, 41, 41, 0, 0, 0, 0, 0, 0],
                    "your_average": [0, 77, 45, 61, 72, 69, 0, 0, 0, 0, 0, 0]
                },
                {
                    "course_id": "FBN1501",
                    "assessment": "SA",
                    "assessment_type_id": "SA-ALL",
                    "student_id": "S1",
                    "labels": [],
                    "your_results": [0, 66, 60, 58, 55, 41, 0, 0, 0, 0, 0, 0],
                    "class_average": [0, 56, 82, 45, 69, 85, 0, 0, 0, 0, 0, 0],
                    "your_average": [0, 54, 85, 69, 66, 68, 0, 0, 0, 0, 0, 0]
                },
                {
                    "course_id": "FBN1501",
                    "assessment": "SA",
                    "assessment_type_id": "SA-ALL",
                    "student_id": "S2",
                    "labels": [],
                    "your_results": [0, 53, 70, 83, 61, 51, 0, 0, 0, 0, 0, 0],
                    "class_average": [0, 66, 48, 50, 69, 65, 0, 0, 0, 0, 0, 0],
                    "your_average": [0, 85, 41, 89, 84, 67, 0, 0, 0, 0, 0, 0]
                },
                {
                    "course_id": "FBN1501",
                    "assessment": "SA",
                    "assessment_type_id": "SA-ALL",
                    "student_id": "S3",
                    "labels": [],
                    "your_results": [0, 73, 67, 89, 46, 64, 0, 0, 0, 0, 0, 0],
                    "class_average": [0, 45, 46, 48, 41, 41, 0, 0, 0, 0, 0, 0],
                    "your_average": [0, 77, 45, 61, 72, 69, 0, 0, 0, 0, 0, 0]
                },
                // STUDENT ALL FBN1502
                {
                    "course_id": "FBN1502",
                    "assessment": "FA",
                    "assessment_type_id": "FA-ALL",
                    "student_id": "S1",
                    "labels": [],
                    "your_results": [0, 66, 60, 58, 55, 41, 0, 0, 0, 0, 0, 0],
                    "class_average": [0, 56, 82, 45, 69, 85, 0, 0, 0, 0, 0, 0],
                    "your_average": [0, 54, 85, 69, 66, 68, 0, 0, 0, 0, 0, 0]
                },
                {
                    "course_id": "FBN1502",
                    "assessment": "FA",
                    "assessment_type_id": "FA-ALL",
                    "student_id": "S2",
                    "labels": [],
                    "your_results": [0, 53, 70, 83, 61, 51, 0, 0, 0, 0, 0, 0],
                    "class_average": [0, 66, 48, 50, 69, 65, 0, 0, 0, 0, 0, 0],
                    "your_average": [0, 85, 41, 89, 84, 67, 0, 0, 0, 0, 0, 0]
                },
                {
                    "course_id": "FBN1502",
                    "assessment": "FA",
                    "assessment_type_id": "FA-ALL",
                    "student_id": "S3",
                    "labels": [],
                    "your_results": [0, 73, 67, 89, 46, 64, 0, 0, 0, 0, 0, 0],
                    "class_average": [0, 45, 46, 48, 41, 41, 0, 0, 0, 0, 0, 0],
                    "your_average": [0, 77, 45, 61, 72, 69, 0, 0, 0, 0, 0, 0]
                },
                {
                    "course_id": "FBN1502",
                    "assessment": "SA",
                    "assessment_type_id": "SA-ALL",
                    "student_id": "S1",
                    "labels": [],
                    "your_results": [0, 66, 60, 58, 55, 41, 0, 0, 0, 0, 0, 0],
                    "class_average": [0, 56, 82, 45, 69, 85, 0, 0, 0, 0, 0, 0],
                    "your_average": [0, 54, 85, 69, 66, 68, 0, 0, 0, 0, 0, 0]
                },
                {
                    "course_id": "FBN1502",
                    "assessment": "SA",
                    "assessment_type_id": "SA-ALL",
                    "student_id": "S2",
                    "labels": [],
                    "your_results": [0, 53, 70, 83, 61, 51, 0, 0, 0, 0, 0, 0],
                    "class_average": [0, 66, 48, 50, 69, 65, 0, 0, 0, 0, 0, 0],
                    "your_average": [0, 85, 41, 89, 84, 67, 0, 0, 0, 0, 0, 0]
                },
                {
                    "course_id": "FBN1502",
                    "assessment": "SA",
                    "assessment_type_id": "SA-ALL",
                    "student_id": "S3",
                    "labels": [],
                    "your_results": [0, 73, 67, 89, 46, 64, 0, 0, 0, 0, 0, 0],
                    "class_average": [0, 45, 46, 48, 41, 41, 0, 0, 0, 0, 0, 0],
                    "your_average": [0, 77, 45, 61, 72, 69, 0, 0, 0, 0, 0, 0]
                },
                // STUDENT S1 SA's
                {
                    "course_id": "FBN1501",
                    "assessment": "SA",
                    "assessment_type_id": "SA-MCQ",
                    "labels": ["MCQ1", "MCQ2", "MCQ3", "MCQ4", "MCQ5", "MCQ6"],
                    "your_results": [80, 56, 45, 51, 59, 76],
                    "class_average": [65, 59, 65, 60, 75, 58],
                    "your_average": [60, 76, 75, 71, 79, 76]
                },
                {
                    "course_id": "FBN1502",
                    "assessment": "SA",
                    "assessment_type_id": "SA-MCQ",
                    "labels": ["MCQ7", "MCQ8", "MCQ9", "MCQ10", "MCQ11", "MCQ12"],
                    "your_results": [60, 62, 55, 71, 59, 76],
                    "class_average": [55, 61, 54, 50, 75, 58],
                    "your_average": [50, 72, 45, 71, 79, 76]
                },
                {
                    "course_id": "FBN1501",
                    "assessment": "SA",
                    "assessment_type_id": "SA-VEN",
                    "labels": ["VEN1", "VEN2"],
                    "your_results": [59, 76],
                    "class_average": [75, 58],
                    "your_average": [79, 76]
                },
                {
                    "course_id": "FBN1502",
                    "assessment": "SA",
                    "assessment_type_id": "SA-VEN",
                    "labels": ["VEN3", "VEN4"],
                    "your_results": [60, 62],
                    "class_average": [55, 61],
                    "your_average": [50, 72]
                },
                {
                    "course_id": "FBN1501",
                    "assessment": "SA",
                    "assessment_type_id": "SA-POR",
                    "labels": ["POR1", "POR2", "POR3", "POR4"],
                    "your_results": [80, 56, 45, 51],
                    "class_average": [65, 59, 65, 60],
                    "your_average": [60, 76, 75, 71]
                },
                {
                    "course_id": "FBN1502",
                    "assessment": "SA",
                    "assessment_type_id": "SA-POR",
                    "labels": ["POR5", "POR6", "POR7", "POR8"],
                    "your_results": [51, 50, 80, 64],
                    "class_average": [78, 65, 74, 52],
                    "your_average": [45, 71, 79, 76]
                },
                {
                    "course_id": "FBN1501",
                    "assessment": "FA",
                    "assessment_type_id": "FA-ASS1",
                    "labels": ["Result"],
                    "your_results": [80],
                    "class_average": [65],
                    "your_average": [60]
                },
                {
                    "course_id": "FBN1502",
                    "assessment": "FA",
                    "assessment_type_id": "FA-ASS1",
                    "labels": ["Result"],
                    "your_results": [58],
                    "class_average": [84],
                    "your_average": [72]
                },
                {
                    "course_id": "FBN1501",
                    "assessment": "FA",
                    "assessment_type_id": "FA-ASS2",
                    "labels": ["Result"],
                    "your_results": [60],
                    "class_average": [75],
                    "your_average": [60]
                },
                {
                    "course_id": "FBN1502",
                    "assessment": "FA",
                    "assessment_type_id": "FA-ASS2",
                    "labels": ["Result"],
                    "your_results": [79],
                    "class_average": [65],
                    "your_average": [72]
                },
                {
                    "course_id": "FBN1501",
                    "assessment": "FA",
                    "assessment_type_id": "FA-POR",
                    "labels": ["Result"],
                    "your_results": [65],
                    "class_average": [73],
                    "your_average": [69]
                },
                {
                    "course_id": "FBN1502",
                    "assessment": "FA",
                    "assessment_type_id": "FA-POR",
                    "labels": ["Result"],
                    "your_results": [73],
                    "class_average": [85],
                    "your_average": [72]
                },
                {
                    "course_id": "FBN1501",
                    "assessment": "FA",
                    "assessment_type_id": "FA-SA1",
                    "labels": ["Result"],
                    "your_results": [55],
                    "class_average": [76],
                    "your_average": [61]
                },
                {
                    "course_id": "FBN1502",
                    "assessment": "FA",
                    "assessment_type_id": "FA-SA1",
                    "labels": ["Result"],
                    "your_results": [63],
                    "class_average": [75],
                    "your_average": [65]
                },
                {
                    "course_id": "FBN1501",
                    "assessment": "FA",
                    "assessment_type_id": "FA-SA2",
                    "labels": ["Result"],
                    "your_results": [65],
                    "class_average": [64],
                    "your_average": [69]
                },
                {
                    "course_id": "FBN1502",
                    "assessment": "FA",
                    "assessment_type_id": "FA-SA2",
                    "labels": ["Result"],
                    "your_results": [61],
                    "class_average": [70],
                    "your_average": [85]
                }
            ];
        };
         
        get progression() {
            return [
                {
                    "course_id": "FBN1501",
                    "student_id": "ALL",
                    "progress": {
                        "videos": {
                            "class_progress": [35],
                            "my_progress": [22],
                            "course_timeline": [32]
                        },
                        "ebooks": {
                            "class_progress": [45],
                            "my_progress": [52],
                            "course_timeline": [42]
                        },
                        "articles": {
                            "class_progress": [65],
                            "my_progress": [67],
                            "course_timeline": [60]
                        },
                        "study_guide": {
                            "class_progress": [44],
                            "my_progress": [55],
                            "course_timeline": [45]
                        }
                    }
                },
                {
                    "course_id": "FBN1501",
                    "student_id": "S1",
                    "progress": {
                        "videos": {
                            "class_progress": [25],
                            "my_progress": [58],
                            "course_timeline": [43]
                        },
                        "ebooks": {
                            "class_progress": [51],
                            "my_progress": [38],
                            "course_timeline": [52]
                        },
                        "articles": {
                            "class_progress": [61],
                            "my_progress": [57],
                            "course_timeline": [70]
                        },
                        "study_guide": {
                            "class_progress": [34],
                            "my_progress": [35],
                            "course_timeline": [51]
                        }
                    }
                },
                {
                    "course_id": "FBN1502",
                    "student_id": "ALL",
                    "progress": {
                        "videos": {
                            "class_progress": [22],
                            "my_progress": [32],
                            "course_timeline": [46]
                        },
                        "ebooks": {
                            "class_progress": [33],
                            "my_progress": [29],
                            "course_timeline": [45]
                        },
                        "articles": {
                            "class_progress": [51],
                            "my_progress": [39],
                            "course_timeline": [36]
                        },
                        "study_guide": {
                            "class_progress": [49],
                            "my_progress": [39],
                            "course_timeline": [51]
                        }
                    }
                },
                {
                    "course_id": "FBN1502",
                    "student_id": "S1",
                    "progress": {
                        "videos": {
                            "class_progress": [32],
                            "my_progress": [52],
                            "course_timeline": [66]
                        },
                        "ebooks": {
                            "class_progress": [43],
                            "my_progress": [39],
                            "course_timeline": [65]
                        },
                        "articles": {
                            "class_progress": [41],
                            "my_progress": [49],
                            "course_timeline": [46]
                        },
                        "study_guide": {
                            "class_progress": [69],
                            "my_progress": [59],
                            "course_timeline": [61]
                        }
                    }
                }
            ];
        };
        
        // methods
        updateAssessmentTypes(a_type)
        {
            var select = $("#assessment-type-filter");
            select.empty();
            var items = _.filter(instance.assessment_types, _.iteratee({'assessment': a_type}));
            $.each(items, function (idx, obj) {
                var option = new Option(obj.description, obj.assessment_type_id);
                select.append($(option));
            });
        }
        
        generateRandomNumber(minimum, maximum, boost_factor)
        {
            var r = Math.floor(Math.random() * (maximum - minimum + 1)) + minimum;
            return r * boost_factor; // this is to boost entries for certain periods
        }

        getDayName(dateStr, locale)
        {
            var date = new Date(dateStr);
            return date.toLocaleDateString(locale, {weekday: 'long'});
        }
            
        getShortDate(dateStr, locale)
        {
            var date = new Date(dateStr);
            return date.toLocaleDateString(locale, {month: 'short', day: 'numeric'});
        }

        generateRandomDataset(value, period)
        {
            var labels = [];
            var logins = [];
            var videos = [];
            var ebooks = [];
            var articles = [];
            var assessments = [];
            var boost_factor = 1;
            var hours_of_interest = [8, 9, 18, 19, 20, 21, 22];
            var days_of_week_interest = [3, 4];
            var days_of_month_interest = [7, 14, 21, 28, 31, 40, 49, 60, 75, 90, 120, 160, 180, 200, 228, 256, 280, 300, 320, 340];

            switch (period) {
                case "hours":
                    for (var x = 0; x < value; x++)
                    {
                        (_.indexOf(hours_of_interest, x) > 0) ? boost_factor = 10 : boost_factor = 1;
                        labels.push(x + "h00");
                        logins.push(instance.generateRandomNumber(3, 40, boost_factor));
                        videos.push(instance.generateRandomNumber(3, 40, boost_factor));
                        ebooks.push(instance.generateRandomNumber(3, 40, boost_factor));
                        articles.push(instance.generateRandomNumber(3, 40, boost_factor));
                        assessments.push(instance.generateRandomNumber(3, 40, boost_factor));
                    }
                    break;
                case "days":
                    for (x = value; x > 0; x--)
                    {
                        (_.indexOf(days_of_week_interest, x) > 0) ? boost_factor = 10 : boost_factor = 1;
                        labels.push(instance.getDayName(new Date().setDate(new Date().getDate()-x+1), "en-US")); // lets include today looking back
                        logins.push(instance.generateRandomNumber(3, 40, boost_factor));
                        videos.push(instance.generateRandomNumber(3, 40, boost_factor));
                        ebooks.push(instance.generateRandomNumber(3, 40, boost_factor));
                        articles.push(instance.generateRandomNumber(3, 40, boost_factor));
                        assessments.push(instance.generateRandomNumber(3, 40, boost_factor));
                    }
                    break;
                case "months":
                    for (x = value * 30; x > 0; x--)
                    {
                        (_.indexOf(days_of_month_interest, x) > 0) ? boost_factor = 10 : boost_factor = 1;
                        labels.push(instance.getShortDate(new Date().setDate(new Date().getDate()-x+1), "en-US")); // lets include today looking back
                        logins.push(instance.generateRandomNumber(3, 40, boost_factor));
                        videos.push(instance.generateRandomNumber(3, 40, boost_factor));
                        ebooks.push(instance.generateRandomNumber(3, 40, boost_factor));
                        articles.push(instance.generateRandomNumber(3, 40, boost_factor));
                        assessments.push(instance.generateRandomNumber(3, 40, boost_factor));
                    }
                    break;
            }

            var ds =
                    {
                        //"course_id": "FBN1501",
                        //"assessment": "SA",
                        //"assessment_type_id": "SA-ALL",
                        "student_id": instance.selected_student,
                        "labels": labels,
                        "logins": logins,
                        "videos": videos,
                        "ebooks": ebooks,
                        "articles": articles,
                        "assessments": assessments
                    };

            return ds;
        }
        
        // events for changes on filters
        setupBindings()
        {
            if (!instance._initialized)
            {
                instance.bindAssessmentFilter();
                instance.bindStudentFilter();
                instance.bindModuleFilter();
                instance.bindAssessmentTypeFilter();
                instance.bindEngagementFilter();
            }
            instance._initialized = true;
        }
        
        bindAssessmentFilter()
        {
            $("#assessment-filter").on("change", function () {
                var self = $(this);
                instance.selected_assessment = self.val();
                instance.updateAssessmentTypes(instance.selected_assessment);
                // lodash methods for rendering graph
                switch(instance.role)
                {
                    case "Learner":
                        var courses = _.filter(instance.results, _.iteratee({
                            'course_id': instance.selected_course, 
                            'assessment': instance.selected_assessment}
                        ));
                        break;
                    case "Mentor":
                    case "Instructor":
                        var courses = _.filter(instance.results, _.iteratee({
                            'course_id': instance.selected_course, 
                            'student_id': instance.selected_student, 
                            'assessment': instance.selected_assessment}
                        ));
                        break;
                }
                instance.renderResultsGraph(_.head(courses));

                // lodash methods for rendering progression
                var prog = _.filter(instance.progression, _.iteratee({'course_id': instance.selected_course}));
                // these methods exist in other plugins but they
                // need to be triggered in the event they exist in scope
                instance.renderVideoProgressionGraph(_.head(prog));
                instance.renderEbookProgressionGraph(_.head(prog));
                instance.renderArticleProgressionGraph(_.head(prog));
                instance.renderStudyGuideProgressionGraph(_.head(prog));
                
                // lodash methods for rendering assessment
                var ass = _.filter(instance.assessments, _.iteratee({
                        'course_id': instance.selected_course,
                        'student_id': instance.selected_student}
                    )
                );
                // these methods exist in other plaugins but they
                // need to be triggered in the event they exist in scope
                instance.renderAssessmentGraph(ass);
            });
        }
        
        bindStudentFilter()
        {
            // event for change of student name
            $("#student-filter").on("change", function(){
                var self = $(this);
                instance.selected_student = self.val();
                $("#assessment-filter").trigger("change");
            });
        }
        
        bindModuleFilter()
        {
            $("#module-filter").on("change", function () {
                var self = $(this);
                instance.selected_course = $(this).val();

                // be economical with the triggers
                switch(instance.role)
                {
                    case "Learner":
                        // trigger the assessment filter change event
                        $("#assessment-filter").trigger("change");
                        break;
                    case "Instructor":
                    case "Mentor":
                        // trigger the student filter change event
                        $("#student-filter").trigger("change");
                        break;
                }
            });
            // and lets just select the first record on page load
            $("#module-filter").trigger("change");
        }
        
        bindAssessmentTypeFilter()
        {
            // event for change on metric items
            $("#assessment-type-filter").on("change", function () {
                var self = $(this);
                // lodash methods for rendering graph
                var courses = _.filter(instance.results, _.iteratee({'course_id': instance.selected_course, 
                    'assessment': instance.selected_assessment, 
                    'assessment_type_id': self.val()}
                    )
                );
                instance.renderResultsGraph(_.head(courses));
            });
        }
        
        bindEngagementFilter()
        {
            $("#student-engagement-filter").on("change", function () {
                var self = $(this);

                var studtrends = [];
                //var studtrends = _.filter(trends, _.iteratee({'period': self.val()}));
                switch (self.val())
                {
                    case "today":
                        studtrends = instance.generateRandomDataset(24, "hours");
                        break;
                    case "week":
                        studtrends = instance.generateRandomDataset(7, "days");
                        break;
                    case "month":
                        studtrends = instance.generateRandomDataset(1, "months");
                        break;
                    case "3-month":
                        studtrends = instance.generateRandomDataset(3, "months");
                        break;
                    case "6-month":
                        studtrends = instance.generateRandomDataset(6, "months");
                        break;
                    case "year":
                        studtrends = instance.generateRandomDataset(12, "months");
                        break;
                    default:
                        studtrends = instance.generateRandomDataSet(24, "hours");
                        break;
                }

                instance.renderEngagementGraph(studtrends);
            });
            $("#student-engagement-filter").trigger("change");
        }
        
        renderResultsGraph(data) {
            // MH: this is a workaround to trash the canvas
            // .destroy() does not work :(
            // clean way of skipping when widget not included in page
            if ($('#student-results').length <= 0) return;
            
            $('#student-results').remove();
            $('#student-results-container').append('<canvas id="student-results"><canvas>');

            // pull a switch-a-roo on the labels and axis count
            if (data && data.labels.length < 1)
            {
                data.labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            }

            var areaChartCanvas = $('#student-results').get(0).getContext('2d');

            var areaChartData = {
                labels: data.labels,
                datasets: [

                    {
                        label: 'Your Results',
                        backgroundColor: 'rgba(251, 114, 23, 1)',
                        borderWidth: 0,
                        data: data.your_results
                    },
                    {
                        label: 'Your Average',
                        backgroundColor: 'rgba(251, 158, 96, 1)',
                        borderWidth: 0,
                        data: data.your_average
                    },
                    {
                        label: 'Class Average',
                        backgroundColor: 'rgba(200, 200, 200, 1)',
                        borderWidth: 0,
                        data: data.class_average
                    }
                ]
            };


            var areaChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: true,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 1,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: false,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true,

                scales: {
                    yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                max: 100  // minimum value will be 0.
                            }
                        }]
                }
            };

            // In Chart.js 2.0.0 Alpha 3 onwards you will need to create your chart like so:
            var areaChart = new Chart(areaChartCanvas, {
                type: "bar",
                data: areaChartData,
                options: areaChartOptions
            });
        }
        
        renderVideoProgressionGraph(data) {
            // MH: this is a workaround to trash the canvas
            // .destroy() does not work :(
            // clean way of skipping when widget not included in page
            if ($('#video-progression').length <= 0) return;
            
            $('#video-progression').remove();
            $('#video-progression-container').append('<canvas id="video-progression"><canvas>');

            // pull a switch-a-roo on the labels and axis count
            var labels = ['Progress'];
            var areaChartCanvas = $('#video-progression').get(0).getContext('2d');

            var areaChartData = {
                labels: labels,
                datasets: [
                    {
                        label: 'Class Progress',
                        backgroundColor: 'rgba(0, 192, 239, 1)',
                        //borderColor: 'rgba(0, 192, 239, 1)',
                        borderWidth: 0,
                        data: data.progress.videos.class_progress
                    },
                    {
                        label: 'My Progress',
                        backgroundColor: 'rgba(111, 215, 241, 1)',
                        //borderColor: 'rgba(221, 75, 57, 1)',
                        borderWidth: 0,
                        data: data.progress.videos.my_progress
                    },
                    {
                        label: 'Course Timeline',
                        backgroundColor: 'rgba(200, 200, 200, 1)',
                        //borderColor: 'rgba(0, 166, 90, 1)',
                        borderWidth: 0,
                        data: data.progress.videos.course_timeline
                    }
                ]
            };


            var areaChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: true,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 1,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: false,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true,

                scales: {
                    yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                max: 100  // minimum value will be 0.
                            }
                        }]
                }
            };

            // In Chart.js 2.0.0 Alpha 3 onwards you will need to create your chart like so:
            var areaChart = new Chart(areaChartCanvas, {
                type: "bar",
                data: areaChartData,
                options: areaChartOptions
            });
        };

        renderEbookProgressionGraph(data) {
            // MH: this is a workaround to trash the canvas
            // .destroy() does not work :(
            // clean way of skipping when widget not included in page
            if ($('#ebook-progression').length <= 0) return;
            
            $('#ebook-progression').remove();
            $('#ebook-progression-container').append('<canvas id="ebook-progression"><canvas>');

            // pull a switch-a-roo on the labels and axis count
            var labels = ['Progress'];
            var areaChartCanvas = $('#ebook-progression').get(0).getContext('2d');

            var areaChartData = {
                labels: labels,
                datasets: [
                    {
                        label: 'Class Progress',
                        backgroundColor: 'rgba(221, 75, 57, 1)',
                        //borderColor: 'rgba(0, 192, 239, 1)',
                        borderWidth: 0,
                        data: data.progress.ebooks.class_progress
                    },
                    {
                        label: 'My Progress',
                        backgroundColor: 'rgba(226, 145, 135, 1)',
                        //borderColor: 'rgba(221, 75, 57, 1)',
                        borderWidth: 0,
                        data: data.progress.ebooks.my_progress
                    },
                    {
                        label: 'Course Timeline',
                        backgroundColor: 'rgba(200, 200, 200, 1)',
                        //borderColor: 'rgba(0, 166, 90, 1)',
                        borderWidth: 0,
                        data: data.progress.ebooks.course_timeline
                    }
                ]
            };


            var areaChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: true,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 1,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: false,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true,

                scales: {
                    yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                max: 100  // minimum value will be 0.
                            }
                        }]
                }
            };

            // In Chart.js 2.0.0 Alpha 3 onwards you will need to create your chart like so:
            var areaChart = new Chart(areaChartCanvas, {
                type: "bar",
                data: areaChartData,
                options: areaChartOptions
            });
        };

        renderArticleProgressionGraph(data) {
            // MH: this is a workaround to trash the canvas
            // .destroy() does not work :(
            // clean way of skipping when widget not included in page
            if ($('#article-progression').length <= 0) return;
            
            $('#article-progression').remove();
            $('#article-progression-container').append('<canvas id="article-progression"><canvas>');

            // pull a switch-a-roo on the labels and axis count
            var labels = ['Progress'];
            var areaChartCanvas = $('#article-progression').get(0).getContext('2d');

            var areaChartData = {
                labels: labels,
                datasets: [
                    {
                        label: 'Class Progress',
                        backgroundColor: 'rgba(0, 166, 90, 1)',
                        //borderColor: 'rgba(0, 192, 239, 1)',
                        borderWidth: 0,
                        data: data.progress.articles.class_progress
                    },
                    {
                        label: 'My Progress',
                        backgroundColor: 'rgba(91, 211, 157, 1)',
                        //borderColor: 'rgba(221, 75, 57, 1)',
                        borderWidth: 0,
                        data: data.progress.articles.my_progress
                    },
                    {
                        label: 'Course Timeline',
                        backgroundColor: 'rgba(200, 200, 200, 1)',
                        //borderColor: 'rgba(0, 166, 90, 1)',
                        borderWidth: 0,
                        data: data.progress.articles.course_timeline
                    }
                ]
            };


            var areaChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: true,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 1,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: false,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true,

                scales: {
                    yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                max: 100  // minimum value will be 0.
                            }
                        }]
                }
            };

            // In Chart.js 2.0.0 Alpha 3 onwards you will need to create your chart like so:
            var areaChart = new Chart(areaChartCanvas, {
                type: "bar",
                data: areaChartData,
                options: areaChartOptions
            });
        };

        renderStudyGuideProgressionGraph(data) {
            // MH: this is a workaround to trash the canvas
            // .destroy() does not work :(
            // clean way of skipping when widget not included in page
            if ($('#study-guide-progression').length <= 0) return;
            
            $('#study-guide-progression').remove();
            $('#study-guide-progression-container').append('<canvas id="study-guide-progression"><canvas>');

            // pull a switch-a-roo on the labels and axis count
            var labels = ['Progress'];
            var areaChartCanvas = $('#study-guide-progression').get(0).getContext('2d');

            var areaChartData = {
                labels: labels,
                datasets: [
                    {
                        label: 'Class Progress',
                        backgroundColor: 'rgba(251, 114, 23, 1)',
                        //borderColor: 'rgba(0, 192, 239, 1)',
                        borderWidth: 0,
                        data: data.progress.study_guide.class_progress
                    },
                    {
                        label: 'My Progress',
                        backgroundColor: 'rgba(251, 158, 96, 1)',
                        //borderColor: 'rgba(221, 75, 57, 1)',
                        borderWidth: 0,
                        data: data.progress.study_guide.my_progress
                    },
                    {
                        label: 'Course Timeline',
                        backgroundColor: 'rgba(200, 200, 200, 1)',
                        //borderColor: 'rgba(0, 166, 90, 1)',
                        borderWidth: 0,
                        data: data.progress.study_guide.course_timeline
                    }
                ]
            };


            var areaChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: true,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 1,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: false,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true,

                scales: {
                    yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                max: 100  // minimum value will be 0.
                            }
                        }]
                }
            };

            // In Chart.js 2.0.0 Alpha 3 onwards you will need to create your chart like so:
            var areaChart = new Chart(areaChartCanvas, {
                type: "bar",
                data: areaChartData,
                options: areaChartOptions
            });
        };
        
        renderEngagementGraph(data) {
            // MH: this is a workaround to trash the canvas
            // .destroy() does not work :(
            // clean way of skipping when widget not included in page
            if ($('#student-engagement').length <= 0) return;
            
            $('#student-engagement').remove();
            $('#student-engagement-container').append('<canvas id="student-engagement"><canvas>');

            // pull a switch-a-roo on the labels and axis count
            if (data && data.labels.length < 1)
            {
                data.labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            }

            var areaChartCanvas = $('#student-engagement').get(0).getContext('2d');

            var areaChartData = {
                labels: data.labels,
                datasets: [

                    {
                        label: 'Logins',
                        fill: false,
                        backgroundColor: 'rgba(251, 114, 23, 1)',
                        borderColor: 'rgba(251, 114, 23, 1)',
                        borderWidth: 0,
                        data: data.logins
                    },
                    {
                        label: 'Videos',
                        fill: false,
                        backgroundColor: 'rgba(251, 158, 96, 1)',
                        borderColor: 'rgba(251, 158, 96, 1)',
                        borderWidth: 0,
                        data: data.videos
                    },
                    {
                        label: 'E-Books',
                        fill: false,
                        backgroundColor: 'rgba(158, 251, 46, 1)',
                        borderColor: 'rgba(158, 251, 46, 1)',
                        borderWidth: 0,
                        data: data.ebooks
                    },
                    {
                        label: 'Articles',
                        fill: false,
                        backgroundColor: 'rgba(51, 158, 216, 1)',
                        borderColor: 'rgba(51, 158, 216, 1)',
                        borderWidth: 0,
                        data: data.articles
                    },
                    {
                        label: 'Self-Assessments',
                        fill: false,
                        backgroundColor: 'rgba(200, 200, 200, 1)',
                        borderColor: 'rgba(200, 200, 200, 1)',
                        borderWidth: 0,
                        data: data.assessments
                    }
                ]
            };


            var areaChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: true,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 1,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: false,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true,

                scales: {
                    yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                //max: 100  // minimum value will be 0.
                            }
                        }]
                }
            };

            // In Chart.js 2.0.0 Alpha 3 onwards you will need to create your chart like so:
            var areaChart = new Chart(areaChartCanvas, {
                type: "line",
                data: areaChartData,
                options: areaChartOptions
            });
        }
        
        renderAssessmentGraph(data) {
        debugger;
            // MH: this is a workaround to trash the canvas
            // .destroy() does not work :(
            // clean way of skipping when widget not included in page
            if ($('#student-assessment').length <= 0) return;
            
            $('#student-assessment').remove();
            $('#student-assessment-container').append('<canvas id="student-assessment"><canvas>');

            var areaChartCanvas = $('#student-assessment').get(0).getContext('2d');
            
            data.labels = [];
            $.each(data, function(idx, obj){
                data.labels = _.concat(data.labels, obj.description);
            });

            var areaChartData = {
                labels: data.labels,
                datasets: [
                    {
                        label: data.description,
                        fill: false,
                        backgroundColor: 'rgba(251, 114, 23, 1)',
                        borderColor: 'rgba(251, 114, 23, 1)',
                        borderWidth: 0,
                        data: data.value
                    }
                ]
            };


            var areaChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: true,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 1,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: false,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true,

                scales: {
                    yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                //max: 100  // minimum value will be 0.
                            }
                        }]
                }
            };

            // In Chart.js 2.0.0 Alpha 3 onwards you will need to create your chart like so:
            var areaChart = new Chart(areaChartCanvas, {
                type: "polararea",
                data: areaChartData,
                options: areaChartOptions
            });
        }
    }
</script>
@endpush