export function saveToken(token) {
    return localStorage.setItem("token", "Bearer " + token);
}

export function removeToken() {
    return localStorage.removeItem("token");
}

export function getToken() {
    return localStorage.getItem("token")
}