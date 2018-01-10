function toggle() {
        if (document.getElementById('map').style.display == 'none') {
            document.getElementById('map').style.display = '';
            document.getElementById('tableau').style.display = 'none';
        } else {
            document.getElementById('map').style.display = 'none';
            document.getElementById('tableau').style.display = '';
        }
    }