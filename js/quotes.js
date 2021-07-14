const quotes =[
    {
        text:"I just wanted to take another look at you",
        source:"A Star Is Born (2018)"
    },
    {
        text:"You gotta hear this one song. It'll change your life, I swear",
        source:"Garden State (2004)"
    },
    {
        text:"I am Groot",
        source:"Guardians of the Galaxy (2014)"
    },
    {
        text:"I ain’t afraid to die anymore, I’ve done it already",
        source:"The Revenant (2016)"
    },
    {
        text:"You is kind. You is smart. You is important",
        source:"The Help (2011)"
    },
    {
        text:"You’re the only man who’s ever touched me",
        source:"Moonlight (2016)"
    },
    {
        text:"Makes it official then",
        source:" The King’s Speech (2010)"
    },
    {
        text:"I suspect foul play. I have eliminated no suspects",
        source:"Boyhood (2014)"
    },
    {
        text:"Manners maketh man",
        source:"Kingsman: The Secret Service (2015)"
    },
    {
        text:"No harm, no foul. No foul, there’s a joke in there somewhere",
        source:" The Florida Project (2017)"
    },
    {
        text:"He’s not lost. Not anymore. To infinity……and beyond",
        source:"Toy Story 4 (2019)"
    },
    {
        text:"Just keep swimming",
        source:"Finding Nemo(2003)"
    },
    {
        text:"Why so serious?",
        source:"The Dark Knight(2008)"
    },
    {
        text:"May the Force be with you",
        source:"Star Wars(1977)"
    },
    {
        text:"Love means never having to say you're sorry",
        source:" Love Story(1970)"
    },
    {
        text:"Carpe diem. Seize the day, boys. Make your lives extraordinary",
        source:"Dead Poets Society (1989)"
    },
    {
        text:"You complete me",
        source:"JERRY MAGUIRE(1996)"
    },
    {
        text:"Some people can’t believe in themselves until someone else believes in them first",
        source:"Good Will Hunting(1997)"
    },
    {
        text:"Every man dies, not every man really lives",
        source:"Braveheart(1995)"
    },
    {
        text:"Get busy living, or get busy dying",
        source:"The Shawshank Redemption(1994)"
    },

]

const ranNum = Math.floor(Math.random()*20);
// console.log(ranNum);

const quote = quotes[ranNum].text;
const source = quotes[ranNum].source;

const quoteTxt = document.querySelector(".quoteBox h2");
const sourceTxt = document.querySelector(".quoteBox span");

function randomQuote(){
    quoteTxt.innerHTML = `<i class="fas fa-quote-left"></i>${quote}<i class="fas fa-quote-right"></i>`;
    sourceTxt.innerText = `- ${source}`;
}
randomQuote();