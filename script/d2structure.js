// Notes
// Bar colors: fill: "rgba(54, 169, 225, .4)",

// create canvas for diagram
var paper = Raphael("diagram", 1100, 800);

// Create basic column backgrounds
// Grid: 170,355,540,725,910,1095
var columns = paper.set();
columns.push(
  paper.rect(182, 73, 162, 620)
 ,paper.rect(358, 73, 162, 620)
 ,paper.rect(535, 73, 162, 620)
 ,paper.rect(711, 73, 162, 620)
 ,paper.rect(888, 73, 162, 620)
);
columns.attr({
    fill: "#F6F6F6",
    "stroke-width": 0,
});

// Dotted horisontal lines
var horisontlines = paper.set();
horisontlines.push(
  paper.path("M45 148L1060 148")
 ,paper.path("M45 242L1060 242")
 ,paper.path("M45 317L1060 317")
 ,paper.path("M45 421L1060 421")
 ,paper.path("M45 543L1060 543")
);
horisontlines.attr({
  fill: "#666666",
  "stroke-width": 0.4,
  "stroke-dasharray": "- "
});


// Layer: Current situation
var layerCurrent = paper.set();

// Create rows in layer
var l1r1 = paper.set();
var l1r2 = paper.set();
var l1r3 = paper.set();

// Populate rows
l1r1.push(
  paper.rect(195,97,138,37)
 ,paper.rect(370,97,138,37)
 ,paper.rect(547,97,138,125)
 ,paper.rect(723,97,138,125)
);
l1r2.push(
  paper.rect(195,168,314,54)
);
l1r3.push(
  paper.rect(195,263,138,406)
 ,paper.rect(370,263,138,406)
 ,paper.rect(547,263,138,406)
 ,paper.rect(723,263,138,406)
)
layerCurrent.push(
  l1r1,
  l1r2,
  l1r3
);
layerCurrent.attr({
  fill: "rgba(54, 169, 225, .4)",
  "stroke-width": 0,
})