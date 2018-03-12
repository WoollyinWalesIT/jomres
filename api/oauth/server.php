
<
?
p
h
p

/
*
*

 
*
 
S
e
t
s
 
u
p
 
t
h
e
 
O
A
u
t
h
2
 
f
r
a
m
e
w
o
r
k
 
s
o
 
t
h
a
t
 
i
t
 
c
a
n
 
a
u
t
h
e
n
t
i
c
a
t
e
 
A
P
I
 
k
e
y
 
p
a
i
r
s

 
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
/


$
t
a
b
l
e
s
 
=
 
a
r
r
a
y
(

 
 
 
 
'
c
l
i
e
n
t
_
t
a
b
l
e
'
 
=
>
 
J
O
M
R
E
S
_
A
P
I
_
D
B
_
D
B
_
P
R
E
F
I
X
.
'
j
o
m
r
e
s
_
o
a
u
t
h
_
c
l
i
e
n
t
s
'
,

 
 
 
 
'
a
c
c
e
s
s
_
t
o
k
e
n
_
t
a
b
l
e
'
 
=
>
 
J
O
M
R
E
S
_
A
P
I
_
D
B
_
D
B
_
P
R
E
F
I
X
.
'
j
o
m
r
e
s
_
o
a
u
t
h
_
a
c
c
e
s
s
_
t
o
k
e
n
s
'
,

 
 
 
 
'
r
e
f
r
e
s
h
_
t
o
k
e
n
_
t
a
b
l
e
'
 
=
>
 
J
O
M
R
E
S
_
A
P
I
_
D
B
_
D
B
_
P
R
E
F
I
X
.
'
j
o
m
r
e
s
_
o
a
u
t
h
_
r
e
f
r
e
s
h
_
t
o
k
e
n
s
'
,

 
 
 
 
'
c
o
d
e
_
t
a
b
l
e
'
 
=
>
 
J
O
M
R
E
S
_
A
P
I
_
D
B
_
D
B
_
P
R
E
F
I
X
.
'
j
o
m
r
e
s
_
o
a
u
t
h
_
a
u
t
h
o
r
i
z
a
t
i
o
n
_
c
o
d
e
s
'
,

 
 
 
 
/
/
 
'
u
s
e
r
_
t
a
b
l
e
'
 
=
>
 
J
O
M
R
E
S
_
A
P
I
_
D
B
_
D
B
_
P
R
E
F
I
X
.
'
j
o
m
r
e
s
_
o
a
u
t
h
_
u
s
e
r
s
'
,
 
/
/
 
W
e
 
d
o
n
'
t
 
u
s
e
 
t
h
i
s

 
 
 
 
/
/
 
'
j
w
t
_
t
a
b
l
e
'
 
 
=
>
 
J
O
M
R
E
S
_
A
P
I
_
D
B
_
D
B
_
P
R
E
F
I
X
.
'
j
o
m
r
e
s
_
o
a
u
t
h
_
j
w
t
'
,
 
 
/
/
 
W
e
 
d
o
n
'
t
 
u
s
e
 
t
h
i
s

 
 
 
 
/
/
 
'
j
t
i
_
t
a
b
l
e
'
 
 
=
>
 
J
O
M
R
E
S
_
A
P
I
_
D
B
_
D
B
_
P
R
E
F
I
X
.
'
j
o
m
r
e
s
_
o
a
u
t
h
_
j
t
i
'
,
 
/
/
 
W
e
 
d
o
n
'
t
 
u
s
e
 
t
h
i
s

 
 
 
 
'
s
c
o
p
e
_
t
a
b
l
e
'
 
=
>
 
J
O
M
R
E
S
_
A
P
I
_
D
B
_
D
B
_
P
R
E
F
I
X
.
'
j
o
m
r
e
s
_
o
a
u
t
h
_
s
c
o
p
e
s
'
,
 
 
/
/
 
W
e
 
d
o
n
'
t
 
u
s
e
 
t
h
i
s
,
 
b
u
t
 
t
h
e
 
O
A
u
t
h
2
 
c
l
a
s
s
 
d
o
e
s

 
 
 
 
/
/
'
p
u
b
l
i
c
_
k
e
y
_
t
a
b
l
e
'
 
 
=
>
 
J
O
M
R
E
S
_
A
P
I
_
D
B
_
D
B
_
P
R
E
F
I
X
.
'
o
a
u
t
h
_
p
u
b
l
i
c
_
k
e
y
s
'
,
 
/
/
 
W
e
 
d
o
n
'
t
 
u
s
e
 
t
h
i
s

 
 
 
 
)
;


$
e
x
i
s
t
i
n
g
_
t
a
b
l
e
s
 
=
 
a
r
r
a
y
(
)
;

$
d
b
 
=
 
n
e
w
 
P
D
O
(
"
m
y
s
q
l
:
d
b
n
a
m
e
=
$
d
b
;
h
o
s
t
=
$
h
o
s
t
"
,
 
J
O
M
R
E
S
_
A
P
I
_
D
B
_
U
S
E
R
N
A
M
E
,
 
J
O
M
R
E
S
_
A
P
I
_
D
B
_
P
A
S
S
W
O
R
D
)
;

$
r
e
s
u
l
t
 
=
 
$
d
b
-
>
q
u
e
r
y
(
'
s
h
o
w
 
t
a
b
l
e
s
'
)
;

w
h
i
l
e
 
(
$
r
o
w
 
=
 
$
r
e
s
u
l
t
-
>
f
e
t
c
h
(
P
D
O
:
:
F
E
T
C
H
_
N
U
M
)
)
 
{

 
 
 
 
$
e
x
i
s
t
i
n
g
_
t
a
b
l
e
s
[
]
 
=
 
$
r
o
w
[
0
]
;

}

u
n
s
e
t
(
$
d
b
)
;

f
o
r
e
a
c
h
 
(
$
t
a
b
l
e
s
 
a
s
 
$
t
a
b
l
e
)
 
{

 
 
 
 
i
f
 
(
!
i
n
_
a
r
r
a
y
(
$
t
a
b
l
e
,
 
$
e
x
i
s
t
i
n
g
_
t
a
b
l
e
s
)
)
 
{

 
 
 
 
 
 
 
 
h
e
a
d
e
r
(
'
C
o
n
t
e
n
t
-
T
y
p
e
'
,
 
'
a
p
p
l
i
c
a
t
i
o
n
/
j
s
o
n
;
 
c
h
a
r
s
e
t
=
u
t
f
-
8
'
)
;

 
 
 
 
 
 
 
 
$
o
b
j
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
$
o
b
j
-
>
s
u
c
c
e
s
s
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
o
b
j
-
>
d
a
t
a
 
=
 
a
r
r
a
y
(
'
E
r
r
o
r
,
 
A
P
I
 
n
o
t
 
i
n
s
t
a
l
l
e
d
'
)
;

 
 
 
 
 
 
 
 
e
c
h
o
 
j
s
o
n
_
e
n
c
o
d
e
(
$
o
b
j
)
;

 
 
 
 
 
 
 
 
d
i
e
(
)
;

 
 
 
 
}

}


/
/
 
e
r
r
o
r
 
r
e
p
o
r
t
i
n
g

i
n
i
_
s
e
t
(
'
d
i
s
p
l
a
y
_
e
r
r
o
r
s
'
,
 
1
)
;
 
e
r
r
o
r
_
r
e
p
o
r
t
i
n
g
(
E
_
A
L
L
)
;


/
/
 
A
u
t
o
l
o
a
d
i
n
g
 
(
c
o
m
p
o
s
e
r
 
i
s
 
p
r
e
f
e
r
r
e
d
,
 
b
u
t
 
f
o
r
 
t
h
i
s
 
e
x
a
m
p
l
e
 
l
e
t
'
s
 
j
u
s
t
 
d
o
 
t
h
i
s
)

r
e
q
u
i
r
e
_
o
n
c
e
 
d
i
r
n
a
m
e
(
_
_
F
I
L
E
_
_
)
.
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
.
'
O
A
u
t
h
2
'
.
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
.
'
A
u
t
o
l
o
a
d
e
r
.
p
h
p
'
;

O
A
u
t
h
2
\
A
u
t
o
l
o
a
d
e
r
:
:
r
e
g
i
s
t
e
r
(
)
;


/
/
 
$
d
s
n
 
i
s
 
t
h
e
 
D
a
t
a
 
S
o
u
r
c
e
 
N
a
m
e
 
f
o
r
 
y
o
u
r
 
d
a
t
a
b
a
s
e
,
 
f
o
r
 
e
x
m
a
p
l
e
 
"
m
y
s
q
l
:
d
b
n
a
m
e
=
m
y
_
o
a
u
t
h
2
_
d
b
;
h
o
s
t
=
l
o
c
a
l
h
o
s
t
"

$
s
t
o
r
a
g
e
 
=
 
n
e
w
 
O
A
u
t
h
2
\
S
t
o
r
a
g
e
\
P
d
o
(
a
r
r
a
y
(
'
d
s
n
'
 
=
>
 
$
d
s
n
,
 
'
u
s
e
r
n
a
m
e
'
 
=
>
 
J
O
M
R
E
S
_
A
P
I
_
D
B
_
U
S
E
R
N
A
M
E
,
 
'
p
a
s
s
w
o
r
d
'
 
=
>
 
J
O
M
R
E
S
_
A
P
I
_
D
B
_
P
A
S
S
W
O
R
D
)
,
 
$
t
a
b
l
e
s
)
;


/
/
 
P
a
s
s
 
a
 
s
t
o
r
a
g
e
 
o
b
j
e
c
t
 
o
r
 
a
r
r
a
y
 
o
f
 
s
t
o
r
a
g
e
 
o
b
j
e
c
t
s
 
t
o
 
t
h
e
 
O
A
u
t
h
2
 
s
e
r
v
e
r
 
c
l
a
s
s

$
s
e
r
v
e
r
 
=
 
n
e
w
 
O
A
u
t
h
2
\
S
e
r
v
e
r
(
$
s
t
o
r
a
g
e
 
,
 

	
a
r
r
a
y
(

	
	
'
a
c
c
e
s
s
_
l
i
f
e
t
i
m
e
'
 
=
>
 
6
0
*
6
0
*
2
4
*
3
6
5
,
 
/
/
 
3
6
5
 
d
a
y
s

	
	
'
r
e
f
r
e
s
h
_
t
o
k
e
n
_
l
i
f
e
t
i
m
e
'
 
=
>
 
2
7
0
0
0
0
0
,

	
	
'
a
l
l
o
w
_
i
m
p
l
i
c
i
t
'
 
=
>
 
t
r
u
e
,

	
	
'
e
n
f
o
r
c
e
_
s
t
a
t
e
'
 
=
>
 
f
a
l
s
e

	
	
)

	
)
;


/
/
 
A
d
d
 
t
h
e
 
"
C
l
i
e
n
t
 
C
r
e
d
e
n
t
i
a
l
s
"
 
g
r
a
n
t
 
t
y
p
e
 
(
i
t
 
i
s
 
t
h
e
 
s
i
m
p
l
e
s
t
 
o
f
 
t
h
e
 
g
r
a
n
t
 
t
y
p
e
s
)

$
s
e
r
v
e
r
-
>
a
d
d
G
r
a
n
t
T
y
p
e
(
n
e
w
 
O
A
u
t
h
2
\
G
r
a
n
t
T
y
p
e
\
C
l
i
e
n
t
C
r
e
d
e
n
t
i
a
l
s
(
$
s
t
o
r
a
g
e
)
)
;


/
/
 
A
d
d
 
t
h
e
 
"
A
u
t
h
o
r
i
z
a
t
i
o
n
 
C
o
d
e
"
 
g
r
a
n
t
 
t
y
p
e
 
(
t
h
i
s
 
i
s
 
w
h
e
r
e
 
t
h
e
 
o
a
u
t
h
 
m
a
g
i
c
 
h
a
p
p
e
n
s
)

$
s
e
r
v
e
r
-
>
a
d
d
G
r
a
n
t
T
y
p
e
(
n
e
w
 
O
A
u
t
h
2
\
G
r
a
n
t
T
y
p
e
\
A
u
t
h
o
r
i
z
a
t
i
o
n
C
o
d
e
(
$
s
t
o
r
a
g
e
)
)
;

