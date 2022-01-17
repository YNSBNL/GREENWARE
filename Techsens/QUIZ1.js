class Question {
  constructor(text, choices, answers) {
    this.text = text;
    this.choices = choices;
    this.answers = answers;
  }
  isCorrectAnswer(choice) {
    return this.answers === choice;
  }
}
let questions = [
  new Question(
    "GreenWare est un projet qui permet d'observer et de mesurer la qualité de l'air sur Paris. ",
    ["Vrai", "Faux", "Je ne sais pas", "Autres Réponses"],
    "Vrai"
  ),

  new Question(
    "Quel est l'origine principal d'émissions des polluants atmosphériques. (plusieurs réponses possibles)",
    [
      "les phénomènes naturelles. ",
      "les activités humaines.",
      "le trafic routier.",
      "l'éruption volcanique.",
    ],
    "les activités humaines"
  ),

  new Question(
    "Quels sont les polluants atmosphériques les plus néfastes pour la santé ?",
    ["l'OZONE", "les particules fines", "le dioxygène", "monoxyde de carbone"],
    "les particules fines"
  ),

  new Question(
    "les particules fines PM10 sont moins dangereuses que les PM2,5.",
    ["Vrai", "Faux"],
    "Faux"
  ),

  new Question(
    "Quels sont les effets des particules fines sur la santé ?(plusieurs réponses possibles)",
    [
      "La cause de maladies respiratoires ou cardiovasculaires",
      "L'origine d'un cancer",
      "Augmente les chances d'avoir le diabète",
      "Développement de migraines"
    ],
    "la cause de maladies respiratoires ou cardiavasculaires",
    "l'origine d'un cancer"
  ),

  new Question(
    "comment peut varier les particules polluants de l'air? (plusieurs réponses possibles) ",
    [
      "la méteo",
      "en fonction des emissions",
      " en fonction de l'environement",
      "aucune bonnes réponses",
    ],
    "la méteo", "en fonction des emissions",
    " en fonction de l'environement"
  ),

  new Question(
    "il existe des inégalités d'exposition liées à la pollution de l'air.",
    ["Vrai", "Faux"],
    "Vrai"
  ),

  new Question(
    "où somme nous le plus exposé aux polluants atmosphériques.",
    ["à l'intérieur d'une voiture", "En vélo", "En montagne", "aucune bonnes réponses"],
    "à l'interieur d'une voiture"
  ),
];

console.log(questions);

class Quiz {
  constructor(questions) {
    this.score = 0;
    this.questions = questions;
    this.currentQuestionIndex = 0;
  }
  getCurrentQuestion() {
    return this.questions[this.currentQuestionIndex];
  }
  guess(answer) {
    if (this.getCurrentQuestion().isCorrectAnswer(answer)) {
      this.score++;
    }

    this.currentQuestionIndex++;
  }
  hasEnded() {
    return this.currentQuestionIndex >= this.questions.length;
  }
}

// regroupement fonction relative d'affichage
const display = {
  elementShown: function (id, text) {
    let element = document.getElementById(id);
    element.innerHTML = text;
  },
  endQuiz: function () {
    endQuizHTML = `
      <h1>Quizz terminé !</h1>
      <h3> Votre score est de : ${quiz.score} / ${quiz.questions.length}</h3>`;
    this.elementShown("quizz", endQuizHTML);
  },
  question: function () {
    this.elementShown("question", quiz.getCurrentQuestion().text);
  },
  choices: function () {
    let choices = quiz.getCurrentQuestion().choices;

    guessHandler = (id, guess) => {
      document.getElementById(id).onclick = function () {
        quiz.guess(guess);
        quizApp();
      };
    };
    // affichage des choices and handle guess
    for (let i = 0; i < choices.length; i++) {
      this.elementShown("choice" + i, choices[i]);
      guessHandler("guess" + i, choices[i]);
    }
  },
  progress: function () {
    let currentQuestionNumber = quiz.currentQuestionIndex + 1;
    this.elementShown(
      "progress",
      "Question " + currentQuestionNumber + " sur " + quiz.questions.length
    );
  },
};

// logique que quiz
quizApp = () => {
  if (quiz.hasEnded()) {
    display.endQuiz();
  } else {
    display.question();
    display.choices();
    display.progress();
  }
};
// Creation du Quiz
let quiz = new Quiz(questions);
quizApp();
