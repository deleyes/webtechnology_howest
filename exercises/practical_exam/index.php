<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MSA</title>
    <style type="text/css">
       .content {
            background-color: white;
            width: 95vw;
            margin: 0 auto;
            padding: 10px;
        }

        img {
            float: right;
            width: 500px;
            margin-left: 1em;
        }

        input[type=submit] {
            display: block;
            width: 400px;
            margin: auto;
            padding: 10px;
            background-color: blue;
            color: white;
            font-weight: bold;
            font-size: 1.2em;
            border: darkblue 2px solid;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<?php

include("./header.php");

?>

<h1>Welcome to the awesome Multi Alignment Visualiser</h1>

<form action="new_analysis.php" method="post">
<div class="content">
    <img src="php-elephant.png" alt="alignment result">
    <p> Welcome to the awesome multiple sequence alignment (MSA) visualiser.</p>

    <p>This tool accepts a MSA and visualize it in a meaningful way customizable by
        the user..</p>

    <p>A multiple sequence alignment (MSA) is a sequence alignment of three or more
        biological sequences, generally protein, DNA, or RNA. In many cases, the input
        set of query sequences are assumed to have an evolutionary relationship by
        which they share a linkage and are descended from a common ancestor. From the
        resulting MSA, sequence homology can be inferred and phylogenetic analysis can
        be conducted to assess the sequences' shared evolutionary origins. Visual
        depictions of the alignment as in the image at right illustrate mutation events
        such as point mutations (single amino acid or nucleotide changes) that appear
        as differing characters in a single alignment column, and insertion or deletion
        mutations (indels or gaps) that appear as hyphens in one or more of the
        sequences in the alignment. Multiple sequence alignment is often used to assess
        sequence conservation of protein domains, tertiary and secondary structures,
        and even individual amino acids or nucleotides.</p>

    <p>Multiple sequence alignment also refers to the process of aligning such a
        sequence set. Because three or more sequences of biologically relevant length
        can be difficult and are almost always time-consuming to align by hand,
        computational algorithms are used to produce and analyze the alignments. MSAs
        require more sophisticated methodologies than pairwise alignment because they
        are more computationally complex. Most multiple sequence alignment programs use
        heuristic methods rather than global optimization because identifying the
        optimal alignment between more than a few sequences of moderate length is
        prohibitively computationally expensive.</p>
</div>

<input type="submit" name="submit" value="Submit new visualistion request">
</form>

</body>
</html>
