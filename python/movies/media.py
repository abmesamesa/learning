import webbrowser


class Video:

    def __init__(self, title, duration):
        self.title = title
        self.duration = duration


class Movie(Video):
    """ This class provides a way to store movie related information"""

    VALID_RATINGS = ["G", "PG", "PG-13", "R"]

    def __init__(self, title, duration, storyline, poster_image_url, trailer_youtube_url):
        Video.title = title
        Video.duration = duration
        self.storyline = storyline
        self.poster_image_url = poster_image_url
        self.trailer_youtube_url = trailer_youtube_url

    def show_trailer(self):
        webbrowser.open(self.trailer_youtube_url)

