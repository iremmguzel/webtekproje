class MovieAPI {
    constructor() {
        this.apiKey = "f3bfbe0d9878601e9e3761a61265acae";
        this.baseImageURL = "https://image.tmdb.org/t/p/w185/";
        this.popularURL = `https://api.themoviedb.org/3/discover/movie?api_key=${this.apiKey}&language=tr-TR&sort_by=popularity.desc`;

        this.searchURL = `https://api.themoviedb.org/3/search/movie?api_key=${this.apiKey}&query=`;
        this.movies = document.querySelector(".movies");
    }

    async getPopularMovies() {
        const response = await fetch(this.popularURL);
        const movies = await response.json();

        this.displayInfo(movies);
    }

    async getMoviesByName(movieName) {
        const response = await fetch(this.searchURL + movieName);
        const movies = await response.json();
        this.displayInfo(movies);
    }

    displayInfo(movies) {
        this.movies.innerHTML = "";

        movies.results.forEach(movie => {
            this.movies.innerHTML += `
            <div class="movie">
                <img class="moviePicture" width="230" height="350"
                    src="${this.baseImageURL}${movie.poster_path}" alt="${movie.title}">
                <div class="info">
                    <h4 class="movieName">${movie.title}</h4>
                    <h5 class="imbdPoint ${this.changeColor(movie.vote_average)}">${Math.round(movie.vote_average)}</h5>
                </div>
            </div>
        `;
        })
    }

    changeColor(imbdPoint) {
        if (imbdPoint >= 8) {
            return "green";
        }
        else if (imbdPoint >= 7) {
            return "yellow";
        }
        return "red";
    }
}