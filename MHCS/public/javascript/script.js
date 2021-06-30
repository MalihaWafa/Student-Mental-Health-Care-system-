//By G A Rubayat Hyder
//A17CS5335

//NavBar
const container = document.querySelector(".container");

document.querySelector(".open-navbar-icon").addEventListener("click", () => {
  container.classList.add("change");
});

document.querySelector(".close-navbar-icon").addEventListener("click", () => {
  container.classList.remove("change");
});

const colors = ["#5433FF", "#4379FF", "#1CC6FF", "#97FBD1", "#F6A4EC"];

let i = 0;

Array.from(document.querySelectorAll(".nav-link")).forEach(item => {
  item.style.cssText = `background-color: ${colors[i++]}`;
});

Array.from(document.querySelectorAll(".navigation-button")).forEach(item => {
  item.onclick = () => {
    item.parentElement.parentElement.classList.toggle("change");
  };
});
//End of NavBar

// Slider With React
class Slider extends React.Component {
    constructor(props) {
      super(props);
  
      this.IMAGE_PARTS = 4;           //Sets the total number of Slides
  
      this.changeTO = null;
      this.AUTOCHANGE_TIME = 5000;    //Sets timer for change of slide
  
      this.state = { activeSlide: -1, prevSlide: -1, sliderReady: false };
    }
  
    // componentWillUnmount() {
    //   window.clearTimeout(this.changeTO);
    // }
  
    componentDidMount() {
      this.runAutochangeTO();
      setTimeout(() => {
        this.setState({ activeSlide: 0, sliderReady: true });
      }, 0);
    }
  
    runAutochangeTO() {
      this.changeTO = setTimeout(() => {
        this.changeSlides(1);
        this.runAutochangeTO();
      }, this.AUTOCHANGE_TIME);
    }
  
    //Manually changing slides
    changeSlides(change) {
      window.clearTimeout(this.changeTO);                   //Deliberately stop the auto movement of the slides by timeout
      const { length } = this.props.slides;
      const prevSlide = this.state.activeSlide;
      let activeSlide = prevSlide + change;
      if (activeSlide < 0) activeSlide = length - 1;
      if (activeSlide >= length) activeSlide = 0;
      this.setState({ activeSlide, prevSlide });
      this.runAutochangeTO();                               //Resets Timer and allows the slide to carry on with the animation which otherwise stops
    }
  
    render() {
      const { activeSlide, prevSlide, sliderReady } = this.state;
      return (
        React.createElement("div", { className: classNames('slider', { 's--ready': sliderReady }) },
        React.createElement("div", { className: "slider__slides" },
        this.props.slides.map((slide, index) =>
        React.createElement("div", {
          className: classNames('slider__slide', { 's--active': activeSlide === index, 's--prev': prevSlide === index }),
          key: slide.buzzword1 },
  
        React.createElement("div", { className: "slider__slide-content" },
        React.createElement("h3", { className: "slider__slide-subheading" }, slide.buzzword2 || slide.buzzword1),
        React.createElement("h2", { className: "slider__slide-heading" },
        slide.buzzword1.split('').map(l => React.createElement("span", null, l))),
  
        ),
  
        React.createElement("div", { className: "slider__slide-parts" },
        [...Array(this.IMAGE_PARTS).fill()].map((x, i) =>
        React.createElement("div", { className: "slider__slide-part", key: i },
        React.createElement("div", { className: "slider__slide-part-inner", style: { backgroundImage: `url(${slide.img})` } }))))))),
  
  
  
  
  
  
        React.createElement("div", { className: "slider__control", onClick: () => this.changeSlides(-1) }),
        React.createElement("div", { className: "slider__control slider__control--right", onClick: () => this.changeSlides(1) }))
        );//End Return
  
  
    }
  }//End Class Slider
  

  
  
  const slides = [
  {
    buzzword1: 'RELAX',
    buzzword2: 'Take A Break',
    img: './gif/Break.gif'
  },
  
  {
    buzzword1: 'CONFIDENCE',
    buzzword2: 'You Can Do It',
    img: './gif/GotThis.gif' },
  
  {
    buzzword1: 'CHANCE',
    buzzword2: 'You Win Some, You Lose Some',
    img: './gif/Learn.gif' },
  
  {
    buzzword1: 'SMILE',
    buzzword2: 'Might Make Your Day',
    img: './gif/Twain.gif',
    
  },
  
  {
    buzzword1: 'TRANQUILITY',
    buzzword2: 'Find Peace In Yourself',
    img: './images/Stream.jpg' }];
  
 //Execute Slider by Render Function
 ReactDOM.render(React.createElement(Slider, { slides: slides }), document.querySelector('#app'));








function onSubmit(){
  var q1 = document.quiz.stress1.value;
  var q2 = document.quiz.stress2.value;
  var q3 = document.quiz.stress3.value;
  var q4 = document.quiz.stress4.value;
  var q5 = document.quiz.stress5.value;
  var q6 = document.quiz.stress6.value;
  var q7 = document.quiz.stress7.value;
  var q8 = document.quiz.stress8.value;
  var q9 = document.quiz.stress9.value;
  var q10 = document.quiz.stress10.value;
  var q11 = document.quiz.stress11.value;
  var q12 = document.quiz.stress12.value;
  var q13 = document.quiz.stress13.value;
  var q14 = document.quiz.stress14.value;

  var total = Number(q1) + Number(q2) + Number(q3) + Number(q4) + Number(q5) + Number(q6) + Number(q7);

      total = total + Number(q8) + Number(q9) + Number(q10) + Number(q11) + Number(q12) + Number(q13) + Number(q14);


      localStorage.setItem('result', total);
      

      return total;
      

}








// total >= 34 is Extremely Severe
//Text to be shown
// Your results show that you may be experiencing a Extremely Severe level of stress. You received a score of 42 for stress. A score of 14 is considered normal for stress.

// This indicates that you may have been recently experiencing the majority of the characteristics displayed by high scorers on the stress scale including feeling:

// over-aroused, tense
// unable to relax
// touchy, easily upset
// irritable
// easily startled
// nervy, jumpy, fidgety
// intolerant of interruption or delay
// Your results indicate that your stress levels are currently at a Extremely Severe level. 
// It is suggested that your levels of stress indicate that you are experiencing these emotions frequently and strongly and you should seek the advice of a medical professional immediately. 
// You should also continue to monitor your stress levels and identify ways to reduce this negative emotional state.




// total >= 26 is Severe
//Text to be shown
// Your results show that you may be experiencing a Severe level of stress. You received a score of 28 for stress. A score of 14 is considered normal for stress.

// This indicates that you may have been recently experiencing many of the characteristics displayed by high scorers on the stress scale including feeling:

// over-aroused, tense
// unable to relax
// touchy, easily upset
// irritable
// easily startled
// nervy, jumpy, fidgety
// intolerant of interruption or delay

// Your results indicate that your stress levels are currently at a Severe level. 
// It is suggested that your levels of stress indicate that you are experiencing these emotions frequently and strongly and you should seek the advice of a medical professional immediately. 
// You should also continue to monitor your stress levels and identify ways to reduce this negative emotional state.



// total >= 19 is Moderate
//Text to be shown
// Your results show that you may be experiencing a Moderate level of stress. You received a score of 22 for stress. A score of 14 is considered normal for stress.

// This indicates that you may have been recently experiencing some of the characteristics displayed by high scorers on the stress scale including feeling:

// over-aroused, tense
// unable to relax
// touchy, easily upset
// irritable
// easily startled
// nervy, jumpy, fidgety
// intolerant of interruption or delay
// Your results indicate that your stress levels are currently at a Moderate level. 
// It is suggested that your levels of stress indicate that you are experiencing these emotions frequently and strongly and you should seek the advice of a medical professional immediately. 
// You should also continue to monitor your stress levels and identify ways to reduce this negative emotional state.




// total >= 14 is Mild
//Text to be shown
// Your results show that you may be experiencing a Mild level of stress. You received a score of 18 for stress. A score of 14 is considered normal for stress.

// This indicates that you may have been recently experiencing a few of the characteristics displayed by high scorers on the stress scale including feeling:

// over-aroused, tense
// unable to relax
// touchy, easily upset
// irritable
// easily startled
// nervy, jumpy, fidgety
// intolerant of interruption or delay

// Your results indicate that your stress levels are currently at a Mild level. 
// It is suggested that you continue to monitor your stress levels and identify ways to reduce this negative emotional state. 
// If you begin experiencing these emotions frequently and strongly or if you feel that you need help then you should always seek the advice of a medical professional.




// Else it is Normal
//Text to be shown

// Your results show that you may be experiencing a Normal level of stress. You received a score of 6 for stress. A score of 14 is considered normal for stress.

// Your results indicate that your stress levels are currently at a Normal level. 
// It is suggested that you continue to monitor and be aware of the symptoms of stress and if you begin experiencing these emotions frequently and strongly you should consider seeking the advice of a medical professional.








































// if(total >= 12)
  // {     
  //       document.write("Your results show that you may be experiencing a Extremely Severe level of stress. You received a score of " + total + " for stress. A score of 5 is considered normal for stress.");

  //       document.write("This indicates that you may have been recently experiencing the majority of the characteristics displayed by high scorers on the stress scale including feeling:");
  
  //       document.write("over-aroused, tense");
  //       document.write("unable to relax");
  //       document.write("touchy, easily upset");
  //       document.write("irritable");
  //       document.write("easily startled");
  //       document.write("nervy, jumpy, fidgety");
  //       document.write("intolerant of interruption or delay");

  //       document.write("Your results indicate that your stress levels are currently at a Extremely Severe level.");
  //       document.write("It is suggested that your levels of stress indicate that you are experiencing these emotions frequently and strongly and"); 
  //       document.write("you should seek the advice of a medical professional immediately."); 
  //       document.write("You should also continue to monitor your stress levels and identify ways to reduce this negative emotional state.");

  // }
  // else if(total >= 7)
  // {
  //   document.write("Your results show that you may be experiencing a Moderate level of stress. You received a score of " + total + " for stress. A score of 5 is considered normal for stress.");

  //   document.write("This indicates that you may have been recently experiencing the majority of the characteristics displayed by high scorers on the stress scale including feeling:");
    
  //   document.write("over-aroused, tense");
  //   document.write("unable to relax");
  //   document.write("touchy, easily upset");
  //   document.write("irritable");
  //   document.write("easily startled");
  //   document.write("nervy, jumpy, fidgety");
  //   document.write("intolerant of interruption or delay");


  //   document.write("Your results indicate that your stress levels are currently at a Moderate level.")
  //   document.write("It is suggested that your levels of stress indicate that you are experiencing these emotions frequently and strongly and")
  //   document.write("you should seek the advice of a medical professional immediately.");
  //   document.write("You should also continue to monitor your stress levels and identify ways to reduce this negative emotional state.");
  // }
  // else if(total >= 5)
  // {
  //   document.write("Your results show that you may be experiencing a Mild level of stress. You received a score of " + total + " for stress. A score of 5 is considered normal for stress.");

  //   document.write("This indicates that you may have been recently experiencing the majority of the characteristics displayed by high scorers on the stress scale including feeling:");
    
  //   document.write("over-aroused, tense");
  //   document.write("unable to relax");
  //   document.write("touchy, easily upset");
  //   document.write("irritable");
  //   document.write("easily startled");
  //   document.write("nervy, jumpy, fidgety");
  //   document.write("intolerant of interruption or delay");


  //   document.write("Your results indicate that your stress levels are currently at a Mild level.");
  //   document.write("It is suggested that you continue to monitor your stress levels and identify ways to reduce this negative emotional state. ");
  //   document.write("If you begin experiencing these emotions frequently and strongly or if you feel that you need help then you should always seek the advice of a medical professional.");
    
  // }
  // else
  // {
  //   document.write("Your results show that you may be experiencing a Normal level of stress. You received a score of " + total + " for stress. A score of 5 is considered normal for stress.");

  //   document.write("Your results indicate that your stress levels are currently at a Normal level. ");
  //   document.write("It is suggested that you continue to monitor and be aware of the symptoms of stress and if");
  //   document.write("you begin experiencing these emotions frequently and strongly you should consider seeking the advice of a medical professional.");

  // }