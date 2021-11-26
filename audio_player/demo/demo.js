var ap1 = new APlayer({
    element: document.getElementById('player1'),
    narrow: false,
    autoplay: false,
    showlrc: false,
    mutex: true,
    theme: '#e6d0b2',
    preload: 'metadata',
    mode: 'circulation',
    music: {
        title: '01 - Gumnaam Hai Koi - 1920 London [DJMaza.Link]',
        author: 'Jubin Nautiyal',
        url: '../src/1.mp3',
        pic: '../src/a.jpg'
    }
});

ap1.on('play', function () {
    console.log('play');
});
ap1.on('play', function () {
    console.log('play play');
});
ap1.on('pause', function () {
    console.log('pause');
});
ap1.on('canplay', function () {
    console.log('canplay');
});
ap1.on('playing', function () {
    console.log('playing');
});
ap1.on('ended', function () {
    console.log('ended');
});
ap1.on('error', function () {
    console.log('error');
});


var ap4 = new APlayer({
    element: document.getElementById('player4'),
    narrow: false,
    autoplay: false,
    showlrc: false,
    mutex: true,
    theme: '#e94e38',
    mode: 'random',
    music: [
        {
            title: '01 - Gumnaam Hai Koi - 1920 London [DJMaza.Link]',
            author: 'Jubin Nautiyal',
            url: '../src/1.mp3',
            pic: '../src/a.jpg'
        },
        {
            title: '02 - Aaj Ro Len De - 1920 London [DJMaza.Link]',
            author: 'Sharib Sabri',
            url: '../src/2.mp3',
            pic: '../src/a.jpg'
        },
        {
            title: '03 - Rootha Kyun - 1920 London [DJMaza.Link]', 
            author: 'Mohit Chauhan',
            url: '../src/3.mp3',
            pic: '../src/a.jpg'
        }
    ]
});
