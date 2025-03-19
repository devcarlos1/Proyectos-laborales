$("#runDjPage").modal("show");

let currentMusic = null;
let player;
let tag = document.createElement("script");
tag.src = "https://www.youtube.com/iframe_api";
let firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

function onYouTubeIframeAPIReady() {
    player = new YT.Player("player", {
        events: {
            "onReady": onPlayerReady,
            "onStateChange": onPlayerStateChange
        },
        playerVars: {
            'autoplay': 1,
            'loop': 0,
            'controls': 1,
            'mute': 0
        },
    });
}

function onPlayerReady(event) {
}

function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PAUSED) {
        playVideo(event.target);
    }
    if (event.data == YT.PlayerState.PLAYING) {
        playVideo(event.target);
    }
    if (event.data == YT.PlayerState.ENDED) {
        playVideo(event.target);
    }
}

function runDjPage() {
    playVideo(player);

    runnAllTimers();
    setInterval(function() {
        runnAllTimers();
    }, 1000);
};

function runnAllTimers() {
    getListeners(user, function(listeners, inQueue) {
        $('#peoples').html(function () {
            let html = '<table class="table table-striped">';
            html += '<thead><tr><th>#</th><th>Klausytojas</th></tr></thead>';
            for (let i = 0; i < listeners.length; i++) {
                html += '<tr><td>' + (i + 1) + '</td><td>' + listeners[i] + '</td></tr>';
            }
            html += '</table>';
            if (inQueue !== -1) {
                html += '<div class="alert alert-success">Jūs esate ' + inQueue + '# eilėje.</div>';
            }
            return html;
        });
    });
    getCurrentMusic(function(current, user, at, likes, dislikes) {
        if (current !== null) {
            if (currentMusic != current) {
                player.loadVideoById(current, at);
                player.setPlaybackRate(1);
                currentMusic = current;
            } else if (player.getCurrentTime() < at - 2) {
                player.loadVideoById(current, at);
            }
            $("#user").html(user);
            $("#like").html(likes);
            $("#dislike").html(dislikes);
        }
    });
    getUserPlaylist(user, function (playlist) {
        $("#playlist").html(function () {
            let html = '<table class="table table-striped">';
            html += '<thead><tr><th>#</th><th>Pavadinimas</th><th>Veiksmai</th></tr></thead>';
            for (let i = 0; i < playlist.length; i++) {
                html += '<tr><td>' + (i + 1) + '</td><td><a href="https://youtube.com/watch?v='+playlist[i].music+'" target="_blank">' + playlist[i].title + '</a></td>';
                html += '<td><button class="btn btn-danger" onclick="deleteMusic('+"'" + playlist[i].music + "'"+')">Ištrinti</button>';
                if (!playlist[i].played)
                    html += '<button class="btn btn-primary" onclick="playMusic('+"'" + playlist[i].music + "'"+')">Paleisti</button>';
                html += '</td></tr>';
            }
            html += '</table>';
            return html;
        });
    });
}
function playVideo(target)
{
    getCurrentMusic(function(current, user, at, likes, dislikes) {
        if (current !== null && target.getCurrentTime() < target.getDuration() - 5) {
            if (currentMusic != current) {
                target.loadVideoById(current, at);
                target.setPlaybackRate(1);
                currentMusic = current;
            } else if (target.getCurrentTime() < at - 2 || target.getCurrentTime() > at + 2) {
                target.loadVideoById(current, at);
            }
            $("#user").html(user);
            $("#like").html(likes);
            $("#dislike").html(dislikes);
        } else if (target.getCurrentTime() >= target.getDuration() - 5) {
            const music = getRandomMusic();
            target.loadVideoById(music, 1);
            target.setPlaybackRate(1);
            currentMusic = music;
            $("#user").html('Serveris');
            $("#like").html(0);
            $("#dislike").html(0);
        }
    });
}

function getRandomMusic()
{
    return playlist[Math.floor(Math.random()*playlist.length)];
}

function deleteMusic(music) 
{
    $.ajax({
        url: '/api/dj/playlist/delete',
        type: 'POST',
        data: {username: user, music: music},
        success: function(data) {
            $("#playVideo").html(function () {
                return '<div class="alert alert-success">Vaizdo įrašas bus sėkmingai ištrintas</div>';
            });
        }
    });
}

function playMusic(music)
{
    $.ajax({
        url: '/api/dj/play',
        type: 'POST',
        data: {username: user, music: music, fromPage: true},
        success: function(data) {
            $("#playVideo").html(function () {
                if (data.status === 1) {
                    return '<div class="alert alert-success">Vaizdo įrašas bus sėkmingai paleistas!</div>';
                } else if (data.status === 2) {
                    return '<div class="alert alert-danger">Ši muzika jau šiandien grojo</div>';
                } else if (data.status === 3) {
                    return '<div class="alert alert-danger">Jūs jau laukiamūjų sąraše</div>';
                } else if (data.status === 4) {
                    return '<div class="alert alert-danger">Muzika neatitinka formato</div>';
                }
            });
        }
    });
}

function getCurrentMusic(callback)
{
    $.ajax({
        url: '/api/dj/getCurrent',
        type: 'POST',
        data: {username: user},
        success: function(data) {
            if (data.status !== false)
                callback(data.current, data.user, data.at, data.likes, data.dislikes);
        }
    });
}

function getListeners(user, callback) 
{
    $.ajax({
        url: '/api/dj/getListeners',
        type: 'POST',
        data: {username: user},
        success: function(data) {
            callback(data.listeners, data.inQueue);
        }
    });
}

function getUserPlaylist(user, callback)
{
    $.ajax({
        url: '/api/dj/playlist',
        type: 'POST',
        data: {username: user},
        success: function(data) {
            callback(data.playlist);
        }
    });
}