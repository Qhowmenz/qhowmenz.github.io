* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Segoe UI", sans-serif;
}

body {
  background-color: #f4f6f8;
  color: #333;
  line-height: 1.6;
}

header {
  background-color: #002244;
  color: white;
  padding: 20px 0;
  text-align: center;
}

header nav ul {
  display: flex;
  justify-content: center;
  list-style: none;
  padding: 10px 0;
}

header nav ul li {
  margin: 0 15px;
}

header nav ul li a {
  color: #fff;
  text-decoration: none;
  font-weight: bold;
}

main {
  padding: 20px;
}

.tile-section {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
  margin-bottom: 40px;
}

.tile {
  background-color: #ffffff;
  border-radius: 8px;
  padding: 30px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  text-align: center;
  font-size: 18px;
  transition: 0.3s;
}

.tile:hover {
  background-color: #e0f0ff;
  transform: scale(1.05);
}

section h2 {
  margin-bottom: 15px;
  color: #002244;
}

footer {
  text-align: center;
  padding: 20px;
  background-color: #002244;
  color: white;
}
