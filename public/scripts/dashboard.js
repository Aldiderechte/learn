function logout() {
    window.location.replace("http://learn.test");
}

function navigateToPage(page) {
    if (page === 'page1') {
        window.location.replace("http://learn.test/main.php");
    } else if (page === 'page3') {
        window.location.replace("https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley");
    } else if (page === 'page2') {
        window.location.replace("");
    }


}