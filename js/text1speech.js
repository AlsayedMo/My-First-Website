//let synthesizer =  window.speechSynthesis; // init speech synthesizer
//let magicVoice = new SpeechSynthesisUtterance(); // instance of speech to text

// text to speech
//function sayTheWord(theseWords){
    console.log(theseWords);
    synthesizer.cancel(); // reset de speech synthesizer
    magicVoice.voice = synthesizer.getVoices()[7]; // language selection dutch
    console.log(synthesizer.getVoices());
    //magicVoice.voice = synthesizer.getVoices()[0]; // language selection english
    magicVoice.pitch = 0.5; // toonhoogte
    magicVoice.rate = 0.8; // speed
    magicVoice.text = theseWords; // say it    
    synthesizer.speak(magicVoice);
}

const textArray = ['Do you want to learn how a website  can do?', 'Have a nice day.', 'I have a special discount offer', 'Welcome to My world.'];
const textString = "Welcome to Mohamed portfolio.Thank you and have a nice day ";

//window.onload(sayTheWord(textArray[1]));
window.onload(sayTheWord(textString));