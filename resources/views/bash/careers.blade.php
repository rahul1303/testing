@extends('app')

@section('content')
    <style>
        /* Icon when the collapsible content is shown */
        .tes:after {
            font-family: "Glyphicons Halflings";
            content: "\e114";
            float: right;
            margin-left: 15px;
        }
        /* Icon when the collapsible content is hidden */
        .tes.collapsed:after {
            content: "\e080";
        }
        a:hover{
            text-decoration: none;
        }
        a:link {
            text-decoration: none;
        }

        /* visited link */
        a:visited {
            text-decoration: none;
        }

        /* selected link */
        a:active {
            text-decoration: none;
        }
    </style>
    @include('bash.nav-top-index')
    <div class="container" style="margin-top: 80px;margin-bottom: 30px;">
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-sm-10 ">
                <h2>Current Openings</h2>
            </div>
        </div>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading ">
                    <h4 class="panel-title">
                        <a class="tes collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            Blogger/Tech Writer Intern</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="job-desc col-sm-offset-1" data-hide="document">
                        <h4>Responsibilities</h4>
                        <ul>
                            <li>To develop unique content for bashindia.</li>
                            <li>To write in-depth as well as short reviews for various products.</li>
                            <li>To keep track and write blog posts about the latest in party venue.</li>
                            <li>To keep track of latest parties and write interesting articles about them.</li>
                            <li>To write articles to help users book parties online.</li>
                            <li>To participate in online discussion with bashindia users.</li>
                            <li>To guest blog / write about bashindia on various blogs.</li>
                            <li>To track the results of various articles and modify next ones accordingly.</li>
                        </ul>

                        <h4>Qualities</h4>
                        <ul>
                            <li>Good attention to detail</li>
                            <li>Ability to stay calm under pressure</li>
                            <li>A great team player</li>
                            <li>Self-driven, tenacious, energetic</li>
                            <li>Ability to work with minimal guidance and supervision</li>
                        </ul>

                        <h4>Qualifications</h4>
                        <ul>
                            <li>Excellent language and writing skills.</li>
                            <li>Ability to work fast and produce a lot of awesome content.</li>
                            <li>Basic Knowledge of HTML and a good command of MS Office.</li>
                            <li>Passionate about party venue booking, parties and all things related to party venue.</li>
                        </ul>

                        <h4>Desirable (but not required)</h4>
                        <ul>
                            <li>Previously written articles/content.</li>
                            <li>Awesome blog of your own.</li>
                        </ul>
                        <br></div><hr>
                    <div class="col-sm-offset-1">
                        Send in your CV/Portfolio and Cover Letter to <a href="mailto:hello@bashindia.com">hello@bashindia.com</a> and be a part of our team.
                        <br>&nbsp;
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading ">
                    <h4 class="panel-title">
                        <a class="tes collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            PHP,Laravel Developer Intern</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="job-desc col-sm-offset-1" data-hide="document">
                        <h4>Responsibilities:</h4>
                        <ul>
                            <li>Working closely with main Development Team</li>
                            <li>Collaborate and effectively work with the rest of the product team</li>
                            <li>Skills such as Algorithms design, Information retrieval, User interface design etc.</li>
                            <li>Come up with new innovative solutions to the hurdles that confront us on a day-to-day basis</li>
                            <li>To identify and rectify any performance bottleneck with various programs</li>
                        </ul>
                        <br>
                        <h4>Qualities:</h4>
                        <ul>
                            <li>Experience with HTML5, as well as other languages is considered a plus</li>
                            <li>Familiarity with mobile web development techniques is a plus</li>
                            <li>Curious, thoughtful, collaborative, personable, organized, attentive to detail</li>
                            <li>Ability to meet deadlines and to adapt to change in an ambiguous environment</li>
                            <li>Ability to stay calm under pressure</li>
                            <li>A great team player</li>
                            <li>Self-driven, tenacious, energetic</li>
                            <li>Ability to work with minimal guidance and supervision</li>
                        </ul>
                        <br>
                        <h4>Qualifications:</h4>
                        <ul>
                            <li>BE/BS/BTech in Computer Science or related field or equivalent practical experience</li>
                            <li>Proficient in PHP, CSS, HTML, AJAX and anything else is a MUST</li>
                            <li>Excellent analytical and problem solving skills</li>
                            <li>Love for coding, with the ability to intuitively pick up and use any new language/framework</li>
                            <li>Organized, attentive to details with strong verbal and presentation skills</li>
                            <!--<li>Experience: 1-5 years</li>-->
                        </ul>
                        <br>
                        Salary: No Constraint, Exponential Learning Experience, Flexible Work Timings, Friendly Environment<br>
                    </div>
                    <hr>
                    <div class="col-sm-offset-1">
                    Send in your CV/Portfolio and Cover Letter to <a href="mailto:hello@bashindia.com">hello@bashindia.com</a> and be a part of our team.
                        <br>&nbsp;
                    </div>
                </div>
            </div>
            </div>
        </div>
    @include('footer')
@endsection