<?php include('header.php') ?>
<div class="content-wrapper">

  <!-- Breadcrumb Start -->
  <div class="breadcrumb-wrap bg-f br-1">
    <div class="container">
      <div class="breadcrumb-title">
        <h2>Quiz</h2>
        <ul class="breadcrumb-menu list-style">
          <li><a href="./">Home </a></li>
          <li>Quiz</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="quiz-container" id="quiz">
    <div class="quiz-header">
      <h2 class="quizh2" id="question">Question text</h2>
      <ul class="quizul">
        <li>
          <input type="radio" name="answer" id="a" class="answer" />
          <label for="a" id="a_text">Question</label>
        </li>

        <li>
          <input type="radio" name="answer" id="b" class="answer" />
          <label for="b" id="b_text">Question</label>
        </li>

        <li>
          <input type="radio" name="answer" id="c" class="answer" />
          <label for="c" id="c_text">Question</label>
        </li>

        <li>
          <input type="radio" name="answer" id="d" class="answer" />
          <label for="d" id="d_text">Question</label>
        </li>
      </ul>
    </div>
    <button class="btn style1 w-100 d-block" id="submit">Submit</button>
  </div>
</div>
<?php include('footer.php') ?>