
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
0
0
5
0
1
p
r
o
p
e
r
t
y
d
e
t
a
i
l
s
o
p
t
i
o
n
s

{

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
 
=
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
'
 
]
;


 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
_
s
i
n
g
l
e
t
o
n
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
)
;

 
 
 
 
 
 
 
 
$
l
i
s
t
s
 
=
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
l
i
s
t
s
'
 
]
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
t
a
r
t
P
a
n
e
l
(
j
r
_
g
e
t
t
e
x
t
(
'
P
R
O
P
E
R
T
Y
_
D
E
T
A
I
L
S
_
P
A
G
E
_
O
P
T
I
O
N
S
'
,
 
'
P
R
O
P
E
R
T
Y
_
D
E
T
A
I
L
S
_
P
A
G
E
_
O
P
T
I
O
N
S
'
,
 
f
a
l
s
e
)
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
G
E
N
E
R
A
L
C
O
N
F
I
G
D
E
S
C
_
F
A
C
E
B
O
O
K
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
G
E
N
E
R
A
L
C
O
N
F
I
G
D
E
S
C
_
F
A
C
E
B
O
O
K
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
e
x
t
=
"
t
e
x
t
"
 
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
5
"
 
n
a
m
e
=
"
c
f
g
_
f
a
c
e
b
o
o
k
_
p
a
g
e
"
 
v
a
l
u
e
=
"
'
.
$
m
r
C
o
n
f
i
g
[
 
'
f
a
c
e
b
o
o
k
_
p
a
g
e
'
 
]
.
'
"
/
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
G
E
N
E
R
A
L
C
O
N
F
I
G
D
E
S
C
_
F
A
C
E
B
O
O
K
_
D
E
S
C
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
G
E
N
E
R
A
L
C
O
N
F
I
G
D
E
S
C
_
F
A
C
E
B
O
O
K
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
j
r
_
g
e
t
t
e
x
t
(
'
H
I
D
D
E
N
_
A
D
D
R
E
S
S
_
S
E
T
T
I
N
G
'
,
 
'
H
I
D
D
E
N
_
A
D
D
R
E
S
S
_
S
E
T
T
I
N
G
'
,
 
f
a
l
s
e
)
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
h
i
d
e
_
l
o
c
a
l
_
a
d
d
r
e
s
s
'
 
]
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
j
r
_
g
e
t
t
e
x
t
(
'
H
I
D
D
E
N
_
A
D
D
R
E
S
S
_
S
E
T
T
I
N
G
_
D
E
S
C
'
,
 
'
H
I
D
D
E
N
_
A
D
D
R
E
S
S
_
S
E
T
T
I
N
G
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

	
	

 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
=
=
 
0
)
 
{


	
	
	

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
O
N
L
Y
A
V
L
C
A
L
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
O
N
L
Y
A
V
L
C
A
L
'
,
 
f
a
l
s
e
)
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
s
h
o
w
O
n
l
y
A
v
a
i
l
a
b
i
l
i
t
y
C
a
l
e
n
d
a
r
'
 
]
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
O
N
L
Y
A
V
L
C
A
L
_
D
E
S
C
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
O
N
L
Y
A
V
L
C
A
L
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
h
o
w
O
n
l
y
A
v
a
i
l
a
b
i
l
i
t
y
C
a
l
e
n
d
a
r
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
O
N
T
H
S
T
O
S
H
O
W
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
O
N
T
H
S
T
O
S
H
O
W
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
n
u
m
b
e
r
"
 
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
5
"
 
n
a
m
e
=
"
c
f
g
_
C
a
l
e
n
d
a
r
M
o
n
t
h
s
T
o
S
h
o
w
"
 
v
a
l
u
e
=
"
'
.
$
m
r
C
o
n
f
i
g
[
 
'
C
a
l
e
n
d
a
r
M
o
n
t
h
s
T
o
S
h
o
w
'
 
]
.
'
"
/
>
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
O
N
T
H
S
T
O
S
H
O
W
_
D
E
S
C
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
O
N
T
H
S
T
O
S
H
O
W
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
O
N
T
H
S
_
S
T
A
R
T
O
F
Y
E
A
R
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
O
N
T
H
S
_
S
T
A
R
T
O
F
Y
E
A
R
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
c
a
l
s
t
a
r
t
f
r
o
m
b
e
g
i
n
n
i
n
g
o
f
y
e
a
r
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
O
N
T
H
S
_
S
T
A
R
T
O
F
Y
E
A
R
_
D
E
S
C
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
O
N
T
H
S
_
S
T
A
R
T
O
F
Y
E
A
R
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
L
I
D
E
S
H
O
W
S
_
S
H
O
W
S
L
I
D
E
S
H
O
W
I
N
L
I
N
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
L
I
D
E
S
H
O
W
S
_
S
H
O
W
S
L
I
D
E
S
H
O
W
I
N
L
I
N
E
'
,
 
f
a
l
s
e
)
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
s
h
o
w
S
l
i
d
e
s
h
o
w
I
n
l
i
n
e
'
 
]
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
L
I
D
E
S
H
O
W
S
_
S
H
O
W
S
L
I
D
E
S
H
O
W
L
I
N
K
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
L
I
D
E
S
H
O
W
S
_
S
H
O
W
S
L
I
D
E
S
H
O
W
L
I
N
K
'
,
 
f
a
l
s
e
)
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
s
h
o
w
S
l
i
d
e
s
h
o
w
L
i
n
k
'
 
]
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
 
!
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
L
I
S
T
R
O
O
M
S
I
N
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
L
I
S
T
R
O
O
M
S
I
N
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
r
o
o
m
s
l
i
s
t
i
n
p
r
o
p
e
r
t
y
d
e
t
a
i
l
s
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
R
O
O
M
S
L
I
S
T
L
I
N
K
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
R
O
O
M
S
L
I
S
T
L
I
N
K
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
s
h
o
w
R
o
o
m
s
L
i
s
t
i
n
g
L
i
n
k
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
A
V
I
L
A
B
I
L
I
T
Y
_
C
A
L
E
N
D
A
R
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
A
V
I
L
A
B
I
L
I
T
Y
_
C
A
L
E
N
D
A
R
'
,
 
f
a
l
s
e
)
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
s
h
o
w
A
v
a
i
l
a
b
i
l
i
t
y
C
a
l
e
n
d
a
r
'
 
]
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
A
V
I
L
A
B
I
L
I
T
Y
_
C
A
L
E
N
D
A
R
_
D
E
S
C
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
A
V
I
L
A
B
I
L
I
T
Y
_
C
A
L
E
N
D
A
R
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
_
S
H
O
W
T
A
R
I
F
F
S
I
N
L
I
N
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
_
S
H
O
W
T
A
R
I
F
F
S
I
N
L
I
N
E
'
,
 
f
a
l
s
e
)
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
s
h
o
w
T
a
r
i
f
f
s
I
n
l
i
n
e
'
 
]
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
_
S
H
O
W
T
A
R
I
F
F
S
L
I
N
K
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
_
S
H
O
W
T
A
R
I
F
F
S
L
I
N
K
'
,
 
f
a
l
s
e
)
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
s
h
o
w
T
a
r
i
f
f
s
L
i
n
k
'
 
]
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
j
r
_
g
e
t
t
e
x
t
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
V
E
R
B
O
S
E
T
A
R
I
F
F
I
N
T
O
'
,
 
'
J
O
M
R
E
S
_
C
O
M
_
A
_
V
E
R
B
O
S
E
T
A
R
I
F
F
I
N
T
O
'
,
 
f
a
l
s
e
)
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
v
e
r
b
o
s
e
t
a
r
i
f
f
i
n
f
o
'
 
]
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
j
r
_
g
e
t
t
e
x
t
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
V
E
R
B
O
S
E
T
A
R
I
F
F
I
N
T
O
_
D
E
S
C
'
,
 
'
J
O
M
R
E
S
_
C
O
M
_
A
_
V
E
R
B
O
S
E
T
A
R
I
F
F
I
N
T
O
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

 
 
 
 
 
 
 
 
}


	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
g
a
l
l
e
r
y
L
i
n
k
'
 
]
)
)
 
{

	
	
	
$
m
r
C
o
n
f
i
g
[
 
'
g
a
l
l
e
r
y
L
i
n
k
'
 
]
 
=
 
'
'
;

	
	
}


	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
G
A
L
L
E
R
Y
L
I
N
K
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
G
A
L
L
E
R
Y
L
I
N
K
'
,
 
f
a
l
s
e
)
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
u
r
l
"
 
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
 
f
o
r
m
-
c
o
n
t
r
o
l
"
 
 
s
i
z
e
=
"
5
0
"
 
n
a
m
e
=
"
c
f
g
_
g
a
l
l
e
r
y
L
i
n
k
"
 
v
a
l
u
e
=
"
'
.
$
m
r
C
o
n
f
i
g
[
 
'
g
a
l
l
e
r
y
L
i
n
k
'
 
]
.
'
"
 
/
>
'
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
G
A
L
L
E
R
Y
L
I
N
K
_
D
E
S
C
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
G
A
L
L
E
R
Y
L
I
N
K
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
H
S
H
O
W
_
C
A
T
E
G
O
R
I
E
S
'
,
 
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
H
S
H
O
W
_
C
A
T
E
G
O
R
I
E
S
'
,
 
f
a
l
s
e
)
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
s
h
o
w
P
f
e
a
t
u
r
e
s
C
a
t
e
g
o
r
i
e
s
'
 
]
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
H
S
H
O
W
_
C
A
T
E
G
O
R
I
E
S
_
D
E
S
C
'
,
 
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
H
S
H
O
W
_
C
A
T
E
G
O
R
I
E
S
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
e
n
d
P
a
n
e
l
(
)
;

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

