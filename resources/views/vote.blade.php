<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A portfolio template that uses Material Design Lite.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>SotaTek - Simple Voting app</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.grey-pink.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <main class="mdl-layout__content">
            <div class="mdl-grid portfolio-max-width portfolio-contact">
                <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">8th May, 2016 ideas brain storming</h2>
                    </div>
                    <div class="mdl-card__media">
                        <img class="article-image" src=" images/contact-image.jpg" border="0" alt="">
                    </div>
                    <div class="mdl-card__supporting-text">
                        <p>
                            Dear all, please vote for ideas from last Friday brain storming sessions.<br>
                            Company's future is all in your votes ^^
                        </p>
                        <p>
                        </p>
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <form method="POST" action="/vote">
                            {!! csrf_field() !!}
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{ $error }}</p>
                            @endforeach
                            @if (isset($success))
                                <p class="alert alert-success">{{ $success }}</p>
                            @endif
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" name="name" id="name">
                                <label class="mdl-textfield__label" for="Name">Name...</label>
                                <span class="mdl-textfield__error">Letters and spaces only</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" name="email" id="email">
                                <label class="mdl-textfield__label" for="Email">Email...</label>
                            </div>
                            <br>
                            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                              <thead>
                                <tr>
                                  <th class="mdl-data-table__cell--non-numeric">Project name</th>
                                  <th>MVP time(x3)</th>
                                  <th>Viral(x2)</th>
                                  <th>Market size(x1)</th>
                                  <th>Like level(x1)</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="mdl-data-table__cell--non-numeric">Online contest system (Hưng)</td>
                                  <td>
                                        <select name=ocs_1 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=ocs_2 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=ocs_3 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=ocs_4 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="mdl-data-table__cell--non-numeric">Personal Asset Management (An)</td>
                                  <td>
                                        <select name=pam_1 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=pam_2 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=pam_3 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=pam_4 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="mdl-data-table__cell--non-numeric">Random chat - online dating (Tuyến)</td>
                                  <td>
                                        <select name=rc_1 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=rc_2 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=rc_3 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=rc_4 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="mdl-data-table__cell--non-numeric">Collaborative translation tool (Thành)</td>
                                  <td>
                                        <select name=clt_1 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=clt_2 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=clt_3 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=clt_4 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="mdl-data-table__cell--non-numeric">Video transcription (Dương)</td>
                                  <td>
                                        <select name=vt_1 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=vt_2 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=vt_3 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=vt_4 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="mdl-data-table__cell--non-numeric">Cloud based Lunar Calendar(Phúc)</td>
                                  <td>
                                        <select name=clc_1 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=clc_2 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=clc_3 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=clc_4 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="mdl-data-table__cell--non-numeric">Hot time promotion deal (a.Tuấn)</td>
                                  <td>
                                        <select name=htp_1 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=htp_2 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=htp_3 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                  <td>
                                        <select name=htp_4 class="mdl-select__input">
                                          <option value="">Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <br>
                            <p>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" 
                                        type="submit">
                                    Submit
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="mdl-mini-footer">
                <div class="mdl-mini-footer__left-section">
                    <div class="mdl-logo">Simple voting website</div>
                </div>
                <div class="mdl-mini-footer__right-section">
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Privacy & Terms</a></li>
                    </ul>
                </div>
            </footer>
        </main>
    </div>
    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</body>

</html>