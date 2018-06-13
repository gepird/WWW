var container= document.getElementsByClassName("opinions")[0];
var opinions= container.children;
console.log(opinions);

var numberOfOpinions=opinions.length;
var actualOpinion=numberOfOpinions-1;

showNext();

function showNext(){
    if(actualOpinion!=0){
        opinions[actualOpinion].style.display='none';
    }
    actualOpinion=(actualOpinion+1)%numberOfOpinions;
    if(actualOpinion==0){
        ++actualOpinion;
    }
    opinions[actualOpinion].style.display='block';
    console.log("wait for next");
    setTimeout(showNext, 10000);
}