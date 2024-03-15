export const init404 = () => {
    let mouseY = 0;
    let mouseX = 0;
    const pageX = document.documentElement.clientWidth;
    const pageY = document.documentElement.clientHeight;

    document.addEventListener('mousemove', function (event) {
        mouseY = event.pageY;
        const yAxis = (pageY / 2 - mouseY) / pageY * 300;

        mouseX = event.pageX / -pageX;
        const xAxis = -mouseX * 100 - 100;

        document.querySelector('.box__ghost-eyes').style.transform = 'translate(' + xAxis + '%,-' + yAxis + '%)';
        console.log('.box__ghost-eyes')
    });
}