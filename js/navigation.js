var currentSection = document.getElementById('welcome-section');

function go(section) {
    var element = document.getElementById(section);
    
    $(currentSection).hide("slide", {direction: "left"}, 1000);
    $(section).show("slide", {direction: "right"}, 1000);

    currentSection = section;
}