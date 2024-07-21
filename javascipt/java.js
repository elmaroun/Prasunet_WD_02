// Function to get the current day of the week
function getCurrentDayOfWeek() {
    const daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const now = new Date();
    const dayOfWeek = daysOfWeek[now.getDay()];
    return dayOfWeek;
}

// Function to get the current day of the month
function getCurrentDay() {
    const now = new Date();
    const day = now.getDate();
    return day;
}

// Function to get the current month
function getCurrentMonth() {
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const now = new Date();
    const month = months[now.getMonth()];
    return month;
}
function getCurrentYear() {
    const now = new Date();
    const year = now.getFullYear();
    return year;
}
// Update elements with current date information
document.addEventListener('DOMContentLoaded', function() {
    const elements1 = document.querySelectorAll('[id="current-dayofweek"]');
    const elements2 = document.querySelectorAll('[id="current-day"]');

    const elements3 = document.querySelectorAll('[id="current-month"]');
    const elements4=document.querySelectorAll('[id="current-year"]');

    elements1.forEach(element1 => {
        element1.innerText = getCurrentDayOfWeek();
    });
    elements2.forEach(element2 => {
        element2.innerText = getCurrentDay();
    });
    elements3.forEach(element3 => {
        element3.innerText = getCurrentMonth();
    });
    elements4.forEach(element4 => {
        element4.innerText = getCurrentYear();
    });
});


// Toggle menu functionality
const menuToggles = document.querySelectorAll('.bi-three-dots');

menuToggles.forEach(menuToggle => {
    menuToggle.addEventListener('click', function() {
        const menu = menuToggle.nextElementSibling; // Select the menu next to the clicked icon
        menu.classList.toggle('active'); // Toggle the 'active' class to show/hide the menu
    });
});

document.querySelectorAll('.bi-plus-square').forEach(toggle => {
    toggle.addEventListener('click', function() {
        const taskContainer = this.closest('.tasks');
        const addTaskDiv = taskContainer.querySelector('.add-task');
        addTaskDiv.classList.toggle('active');
    });
});


const donetoggles = document.querySelectorAll('.done');
donetoggles.forEach(donetoggle => {
    donetoggle.addEventListener('click', function() {
        const task = donetoggle.closest('.task');
        const checkbox = task.querySelector('.checkbox');
        const checkSquare = task.querySelector('.bi-check-square-fill');
        
        checkbox.classList.toggle('active');
        checkSquare.classList.toggle('active');
    });
});


// Page navigation functionality
const links = document.querySelectorAll('.header a');
const pages = document.querySelectorAll('.page');
links.forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault();

        // Hide all pages
        pages.forEach(page => {
            page.style.display = 'none';
        });
        links. forEach(link1=>{
            link1.classList.remove('active');
        })
        link.classList.toggle('active')
        // Show the clicked page
        const targetId = link.getAttribute('href').substring(1);
        document.getElementById(targetId).style.display = 'block';
    });
});
