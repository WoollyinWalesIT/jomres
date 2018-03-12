
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
6
0
0
1
d
a
s
h
b
o
a
r
d

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

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
_
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
t
a
s
k
'
 
=
>
 
'
d
a
s
h
b
o
a
r
d
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
s
'
 
=
>
 
a
r
r
a
y
(
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
f
o
'
 
=
>
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
1
D
A
S
H
B
O
A
R
D
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
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
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
'
'
;


 
 
 
 
 
 
 
 
$
e
P
o
i
n
t
F
i
l
e
p
a
t
h
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
e
P
o
i
n
t
F
i
l
e
p
a
t
h
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
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
[
 
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
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
p
r
o
p
e
r
t
y
_
u
i
d
'
 
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
g
e
t
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
i
f
 
(
i
s
s
e
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
[
 
'
o
u
t
p
u
t
_
n
o
w
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
n
o
w
 
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
o
u
t
p
u
t
_
n
o
w
'
 
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
n
o
w
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
r
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 
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
p
r
o
p
e
r
t
y
_
u
i
d
,
 
$
t
h
i
s
J
R
U
s
e
r
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
$
p
r
o
p
e
r
t
y
_
u
i
d
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
 
1
 
|
|
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
s
_
j
i
n
t
o
u
r
_
p
r
o
p
e
r
t
y
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
o
u
t
p
u
t
 
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
p
a
g
e
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
j
a
v
a
s
c
r
i
p
t
'
,
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
.
'
m
o
m
e
n
t
/
m
i
n
/
'
,
 
'
m
o
m
e
n
t
.
m
i
n
.
j
s
'
)
;

 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
j
a
v
a
s
c
r
i
p
t
'
,
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
.
'
f
u
l
l
c
a
l
e
n
d
a
r
/
d
i
s
t
/
'
,
 
'
f
u
l
l
c
a
l
e
n
d
a
r
.
m
i
n
.
j
s
'
)
;

 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
j
a
v
a
s
c
r
i
p
t
'
,
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
.
'
f
u
l
l
c
a
l
e
n
d
a
r
/
d
i
s
t
/
'
,
 
'
l
a
n
g
-
a
l
l
.
j
s
'
)
;

 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
j
a
v
a
s
c
r
i
p
t
'
,
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
.
'
f
u
l
l
c
a
l
e
n
d
a
r
-
s
c
h
e
d
u
l
e
r
/
d
i
s
t
/
'
,
 
'
s
c
h
e
d
u
l
e
r
.
m
i
n
.
j
s
'
)
;

 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
j
a
v
a
s
c
r
i
p
t
'
,
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
.
'
b
l
o
c
k
u
i
-
n
p
m
/
'
,
 
'
j
q
u
e
r
y
.
b
l
o
c
k
U
I
.
j
s
'
)
;

 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
c
s
s
'
,
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
.
'
f
u
l
l
c
a
l
e
n
d
a
r
/
d
i
s
t
/
'
,
 
'
f
u
l
l
c
a
l
e
n
d
a
r
.
m
i
n
.
c
s
s
'
)
;

 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
c
s
s
'
,
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
.
'
f
u
l
l
c
a
l
e
n
d
a
r
-
s
c
h
e
d
u
l
e
r
/
d
i
s
t
/
'
,
 
'
s
c
h
e
d
u
l
e
r
.
m
i
n
.
c
s
s
'
)
;

 
 
 
 
 
 
 
 
/
/
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
"
c
s
s
"
,
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
.
'
f
u
l
l
c
a
l
e
n
d
a
r
/
'
,
'
f
u
l
l
c
a
l
e
n
d
a
r
.
p
r
i
n
t
.
c
s
s
'
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
P
A
G
E
T
I
T
L
E
'
]
 
=
 
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
I
N
T
E
R
V
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
I
N
T
E
R
V
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
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
R
O
O
M
S
'
]
 
=
 
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
V
R
C
T
_
T
A
B
_
R
O
O
M
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
V
R
C
T
_
T
A
B
_
R
O
O
M
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
D
R
A
G
_
T
R
A
S
H
'
]
 
=
 
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
D
A
S
H
B
O
A
R
D
_
D
R
A
G
_
T
R
A
S
H
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
D
A
S
H
B
O
A
R
D
_
D
R
A
G
_
T
R
A
S
H
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
/
/
b
u
t
t
o
n
s

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
N
E
X
T
'
]
 
=
 
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
C
O
M
M
O
N
_
N
E
X
T
'
,
 
'
C
O
M
M
O
N
_
N
E
X
T
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
P
R
E
V
'
]
 
=
 
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
C
O
M
M
O
N
_
P
R
E
V
'
,
 
'
C
O
M
M
O
N
_
P
R
E
V
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
T
O
D
A
Y
'
]
 
=
 
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
D
A
S
H
B
O
A
R
D
_
T
O
D
A
Y
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
D
A
S
H
B
O
A
R
D
_
T
O
D
A
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
M
O
N
T
H
'
]
 
=
 
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
D
A
S
H
B
O
A
R
D
_
M
O
N
T
H
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
D
A
S
H
B
O
A
R
D
_
M
O
N
T
H
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
W
E
E
K
'
]
 
=
 
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
D
A
S
H
B
O
A
R
D
_
W
E
E
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
D
A
S
H
B
O
A
R
D
_
W
E
E
K
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
T
W
O
W
E
E
K
S
'
]
 
=
 
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
H
T
W
O
_
W
E
E
K
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
H
T
W
O
_
W
E
E
K
S
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
D
A
Y
'
]
 
=
 
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
D
A
S
H
B
O
A
R
D
_
D
A
Y
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
D
A
S
H
B
O
A
R
D
_
D
A
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
Y
E
A
R
'
]
 
=
 
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
D
A
S
H
B
O
A
R
D
_
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
D
A
S
H
B
O
A
R
D
_
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
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
N
E
W
_
B
O
O
K
I
N
G
'
]
 
=
 
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
H
N
E
W
_
B
O
O
K
I
N
G
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
H
N
E
W
_
B
O
O
K
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
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
N
E
W
_
B
O
O
K
I
N
G
_
U
R
L
'
]
 
=
 
g
e
t
_
b
o
o
k
i
n
g
_
u
r
l
(
$
p
r
o
p
e
r
t
y
_
u
i
d
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
B
L
A
C
K
_
B
O
O
K
I
N
G
S
'
]
 
=
 
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
F
R
O
N
T
_
B
L
A
C
K
B
O
O
K
I
N
G
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
F
R
O
N
T
_
B
L
A
C
K
B
O
O
K
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
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
B
L
A
C
K
_
B
O
O
K
I
N
G
S
_
U
R
L
'
]
 
=
 
j
o
m
r
e
s
U
r
l
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
t
a
s
k
=
l
i
s
t
_
b
l
a
c
k
_
b
o
o
k
i
n
g
s
'
)
;


 
 
 
 
 
 
 
 
/
/
l
e
g
e
n
d

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
L
E
G
E
N
D
'
]
 
=
 
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
H
L
E
G
E
N
D
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
H
L
E
G
E
N
D
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
T
E
X
T
_
P
E
N
D
I
N
G
'
 
]
 
=
 
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
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
 
?
 
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
V
I
E
W
B
O
O
K
I
N
G
S
_
P
E
N
D
I
N
G
_
W
H
O
L
E
D
A
Y
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
V
I
E
W
B
O
O
K
I
N
G
S
_
P
E
N
D
I
N
G
_
W
H
O
L
E
D
A
Y
'
)
 
:
 
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
V
I
E
W
B
O
O
K
I
N
G
S
_
P
E
N
D
I
N
G
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
V
I
E
W
B
O
O
K
I
N
G
S
_
P
E
N
D
I
N
G
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
T
E
X
T
_
A
R
R
I
V
E
T
O
D
A
Y
'
 
]
 
=
 
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
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
 
?
 
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
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
E
T
O
D
A
Y
_
W
H
O
L
E
D
A
Y
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
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
E
T
O
D
A
Y
_
W
H
O
L
E
D
A
Y
'
)
 
:
 
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
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
E
T
O
D
A
Y
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
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
E
T
O
D
A
Y
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
T
E
X
T
_
R
E
S
I
D
E
N
T
'
 
]
 
=
 
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
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
 
?
 
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
V
I
E
W
B
O
O
K
I
N
G
S
_
R
E
S
I
D
E
N
T
_
W
H
O
L
E
D
A
Y
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
V
I
E
W
B
O
O
K
I
N
G
S
_
R
E
S
I
D
E
N
T
_
W
H
O
L
E
D
A
Y
'
)
 
:
 
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
V
I
E
W
B
O
O
K
I
N
G
S
_
R
E
S
I
D
E
N
T
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
V
I
E
W
B
O
O
K
I
N
G
S
_
R
E
S
I
D
E
N
T
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
T
E
X
T
_
L
A
T
E
'
 
]
 
=
 
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
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
 
?
 
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
V
I
E
W
B
O
O
K
I
N
G
S
_
L
A
T
E
_
W
H
O
L
E
D
A
Y
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
V
I
E
W
B
O
O
K
I
N
G
S
_
L
A
T
E
_
W
H
O
L
E
D
A
Y
'
)
 
:
 
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
V
I
E
W
B
O
O
K
I
N
G
S
_
L
A
T
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
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
L
A
T
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
T
E
X
T
_
D
E
P
A
R
T
T
O
D
A
Y
'
 
]
 
=
 
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
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
 
?
 
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
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
T
O
D
A
Y
_
W
H
O
L
E
D
A
Y
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
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
T
O
D
A
Y
_
W
H
O
L
E
D
A
Y
'
)
 
:
 
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
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
T
O
D
A
Y
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
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
T
O
D
A
Y
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
T
E
X
T
_
S
T
I
L
L
H
E
R
E
'
 
]
 
=
 
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
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
 
?
 
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
V
I
E
W
B
O
O
K
I
N
G
S
_
S
T
I
L
L
H
E
R
E
_
W
H
O
L
E
D
A
Y
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
V
I
E
W
B
O
O
K
I
N
G
S
_
S
T
I
L
L
H
E
R
E
_
W
H
O
L
E
D
A
Y
'
)
 
:
 
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
V
I
E
W
B
O
O
K
I
N
G
S
_
S
T
I
L
L
H
E
R
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
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
S
T
I
L
L
H
E
R
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
T
E
X
T
_
B
O
O
K
E
D
O
U
T
'
 
]
 
=
 
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
S
T
A
T
U
S
_
C
H
E
C
K
E
D
O
U
T
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
S
T
A
T
U
S
_
C
H
E
C
K
E
D
O
U
T
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
B
L
A
C
K
B
O
O
K
I
N
G
'
]
 
=
 
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
V
L
C
A
L
_
B
L
A
C
K
_
K
E
Y
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
V
L
C
A
L
_
B
L
A
C
K
_
K
E
Y
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
/
/
w
a
r
n
i
n
g
s

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
C
A
N
C
E
L
L
A
T
I
O
N
_
W
A
R
N
I
N
G
'
]
 
=
 
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
B
O
O
K
I
N
G
_
C
A
N
C
E
L
L
A
T
I
O
N
_
W
A
R
N
I
N
G
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
B
O
O
K
I
N
G
_
C
A
N
C
E
L
L
A
T
I
O
N
_
W
A
R
N
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
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
A
M
E
N
D
_
W
A
R
N
I
N
G
'
]
 
=
 
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
B
O
O
K
I
N
G
_
A
M
E
N
D
_
W
A
R
N
I
N
G
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
B
O
O
K
I
N
G
_
A
M
E
N
D
_
W
A
R
N
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
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
W
H
O
L
E
D
A
Y
_
B
O
O
K
I
N
G
S
'
]
 
=
 
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
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
A
J
A
X
U
R
L
_
R
E
S
O
U
R
C
E
S
'
]
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
J
A
X
.
'
&
t
a
s
k
=
d
a
s
h
b
o
a
r
d
_
r
e
s
o
u
r
c
e
s
_
a
j
a
x
&
p
r
o
p
e
r
t
y
_
u
i
d
=
'
.
$
p
r
o
p
e
r
t
y
_
u
i
d
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
A
J
A
X
U
R
L
_
E
V
E
N
T
S
'
]
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
J
A
X
.
'
&
t
a
s
k
=
d
a
s
h
b
o
a
r
d
_
e
v
e
n
t
s
_
a
j
a
x
&
p
r
o
p
e
r
t
y
_
u
i
d
=
'
.
$
p
r
o
p
e
r
t
y
_
u
i
d
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
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
U
I
D
'
]
 
=
 
$
p
r
o
p
e
r
t
y
_
u
i
d
;


 
 
 
 
 
 
 
 
i
f
 
(
$
j
r
C
o
n
f
i
g
[
'
c
a
l
e
n
d
a
r
s
t
a
r
t
o
f
w
e
e
k
d
a
y
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
o
u
t
p
u
t
[
'
F
I
R
S
T
_
D
A
Y
_
O
F
_
W
E
E
K
'
]
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
F
I
R
S
T
_
D
A
Y
_
O
F
_
W
E
E
K
'
]
 
=
 
'
1
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
r
o
w
s
 
=
 
a
r
r
a
y
(

	
	
	
'
0
'
 
=
>
 
a
r
r
a
y
(
'
V
I
E
W
'
 
=
>
 
'
t
i
m
e
l
i
n
e
D
a
y
'
,
 
'
A
C
T
I
V
E
'
 
=
>
 
'
'
,
 
'
V
I
E
W
_
N
A
M
E
'
 
=
>
 
$
o
u
t
p
u
t
[
'
D
A
Y
'
]
)
,

	
	
	
'
1
'
 
=
>
 
a
r
r
a
y
(
'
V
I
E
W
'
 
=
>
 
'
t
i
m
e
l
i
n
e
W
e
e
k
'
,
 
'
A
C
T
I
V
E
'
 
=
>
 
'
'
,
 
'
V
I
E
W
_
N
A
M
E
'
 
=
>
 
$
o
u
t
p
u
t
[
'
W
E
E
K
'
]
)
,

	
	
	
'
2
'
 
=
>
 
a
r
r
a
y
(
'
V
I
E
W
'
 
=
>
 
'
t
i
m
e
l
i
n
e
T
w
o
W
e
e
k
s
'
,
 
'
A
C
T
I
V
E
'
 
=
>
 
'
a
c
t
i
v
e
'
,
 
'
V
I
E
W
_
N
A
M
E
'
 
=
>
 
$
o
u
t
p
u
t
[
'
T
W
O
W
E
E
K
S
'
]
)
,

	
	
	
'
3
'
 
=
>
 
a
r
r
a
y
(
'
V
I
E
W
'
 
=
>
 
'
t
i
m
e
l
i
n
e
M
o
n
t
h
'
,
 
'
A
C
T
I
V
E
'
 
=
>
 
'
'
,
 
'
V
I
E
W
_
N
A
M
E
'
 
=
>
 
$
o
u
t
p
u
t
[
'
M
O
N
T
H
'
]
)
,

	
	
	
'
4
'
 
=
>
 
a
r
r
a
y
(
'
V
I
E
W
'
 
=
>
 
'
t
i
m
e
l
i
n
e
Y
e
a
r
'
,
 
'
A
C
T
I
V
E
'
 
=
>
 
'
'
,
 
'
V
I
E
W
_
N
A
M
E
'
 
=
>
 
$
o
u
t
p
u
t
[
'
Y
E
A
R
'
]
)

	
	
)
;


 
 
 
 
 
 
 
 
/
/
g
u
e
s
t
 
m
o
d
a
l
 
f
o
r
m

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
Q
U
I
C
K
_
B
O
O
K
I
N
G
'
 
]
 
=
 
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
H
Q
U
I
C
K
_
B
O
O
K
I
N
G
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
H
Q
U
I
C
K
_
B
O
O
K
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
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
S
E
L
E
C
T
E
D
_
R
O
O
M
'
 
]
 
=
 
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
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
R
O
O
M
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
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
R
O
O
M
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
S
E
L
E
C
T
E
D
_
D
A
T
E
S
'
 
]
 
=
 
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
H
F
R
O
M
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
H
F
R
O
M
'
,
 
f
a
l
s
e
)
.
'
/
'
.
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
H
T
O
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
H
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
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
F
I
R
S
T
N
A
M
E
'
 
]
 
=
 
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
D
I
S
P
G
U
E
S
T
_
F
I
R
S
T
N
A
M
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
M
R
_
D
I
S
P
G
U
E
S
T
_
F
I
R
S
T
N
A
M
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
S
U
R
N
A
M
E
'
 
]
 
=
 
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
D
I
S
P
G
U
E
S
T
_
S
U
R
N
A
M
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
M
R
_
D
I
S
P
G
U
E
S
T
_
S
U
R
N
A
M
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
H
O
U
S
E
'
 
]
 
=
 
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
D
I
S
P
G
U
E
S
T
_
H
O
U
S
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
M
R
_
D
I
S
P
G
U
E
S
T
_
H
O
U
S
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
S
T
R
E
E
T
'
 
]
 
=
 
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
D
I
S
P
G
U
E
S
T
_
S
T
R
E
E
T
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
D
I
S
P
G
U
E
S
T
_
S
T
R
E
E
T
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
T
O
W
N
'
 
]
 
=
 
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
D
I
S
P
G
U
E
S
T
_
T
O
W
N
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
D
I
S
P
G
U
E
S
T
_
T
O
W
N
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
R
E
G
I
O
N
'
 
]
 
=
 
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
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
R
E
G
I
O
N
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
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
R
E
G
I
O
N
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
C
O
U
N
T
R
Y
'
 
]
 
=
 
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
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
O
U
N
T
R
Y
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
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
O
U
N
T
R
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
P
O
S
T
C
O
D
E
'
 
]
 
=
 
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
D
I
S
P
G
U
E
S
T
_
P
O
S
T
C
O
D
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
M
R
_
D
I
S
P
G
U
E
S
T
_
P
O
S
T
C
O
D
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
L
A
N
D
L
I
N
E
'
 
]
 
=
 
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
D
I
S
P
G
U
E
S
T
_
L
A
N
D
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
M
R
_
D
I
S
P
G
U
E
S
T
_
L
A
N
D
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
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
M
O
B
I
L
E
'
 
]
 
=
 
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
D
I
S
P
G
U
E
S
T
_
M
O
B
I
L
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
M
R
_
D
I
S
P
G
U
E
S
T
_
M
O
B
I
L
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
F
A
X
'
 
]
 
=
 
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
D
I
S
P
G
U
E
S
T
_
F
A
X
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
D
I
S
P
G
U
E
S
T
_
F
A
X
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
E
M
A
I
L
'
 
]
 
=
 
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
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
E
M
A
I
L
_
E
X
P
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
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
E
M
A
I
L
_
E
X
P
L
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
C
O
N
T
R
A
C
T
_
T
O
T
A
L
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
L
I
S
T
B
O
O
K
I
N
G
S
_
H
E
A
D
E
R
_
B
O
O
K
I
N
G
T
O
T
A
L
'
,
 
'
_
J
R
P
O
R
T
A
L
_
L
I
S
T
B
O
O
K
I
N
G
S
_
H
E
A
D
E
R
_
B
O
O
K
I
N
G
T
O
T
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
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
D
E
P
O
S
I
T
_
R
E
Q
U
I
R
E
D
'
 
]
 
=
 
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
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
R
E
Q
U
I
R
E
D
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
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
R
E
Q
U
I
R
E
D
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
D
E
P
O
S
I
T
_
P
A
I
D
'
 
]
 
=
 
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
C
O
M
P
_
A
M
E
N
D
_
D
E
P
O
S
I
T
P
A
I
D
'
,
 
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
D
E
P
O
S
I
T
P
A
I
D
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
B
O
O
K
E
D
_
I
N
'
 
]
 
=
 
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
A
C
T
I
O
N
_
C
H
E
C
K
I
N
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
A
C
T
I
O
N
_
C
H
E
C
K
I
N
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
C
O
U
N
T
R
Y
'
 
]
 
=
 
c
r
e
a
t
e
S
i
m
p
l
e
C
o
u
n
t
r
i
e
s
D
r
o
p
d
o
w
n
(
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
R
E
G
I
O
N
'
 
]
 
=
 
s
e
t
u
p
R
e
g
i
o
n
s
(
'
'
,
 
'
'
,
 
t
r
u
e
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
0
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
0
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
0
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
1
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
1
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
1
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
2
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
2
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
2
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
3
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
3
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
3
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
4
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
4
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
4
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
5
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
5
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
5
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
6
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
6
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
6
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
7
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
7
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
7
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
8
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
8
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
8
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
9
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
9
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
9
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
1
0
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
1
0
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
1
0
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
1
1
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
1
1
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
1
1
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
0
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
0
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
0
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
1
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
1
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
1
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
2
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
2
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
2
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
3
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
3
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
3
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
4
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
4
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
4
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
5
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
5
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
5
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
6
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
6
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
6
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
7
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
7
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
7
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
8
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
8
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
8
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
9
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
9
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
9
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
1
0
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
1
0
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
1
0
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
1
1
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
1
1
'
,
 
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
1
1
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
W
E
E
K
D
A
Y
S
_
M
O
N
D
A
Y
'
 
]
 
=
 
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
W
E
E
K
D
A
Y
S
_
M
O
N
D
A
Y
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
W
E
E
K
D
A
Y
S
_
M
O
N
D
A
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
W
E
E
K
D
A
Y
S
_
T
U
E
S
D
A
Y
'
 
]
 
=
 
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
W
E
E
K
D
A
Y
S
_
T
U
E
S
D
A
Y
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
W
E
E
K
D
A
Y
S
_
T
U
E
S
D
A
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
W
E
E
K
D
A
Y
S
_
W
E
D
N
E
S
D
A
Y
'
 
]
 
=
 
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
W
E
E
K
D
A
Y
S
_
W
E
D
N
E
S
D
A
Y
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
W
E
E
K
D
A
Y
S
_
W
E
D
N
E
S
D
A
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
A
Y
'
 
]
 
=
 
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
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
A
Y
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
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
A
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
Y
'
 
]
 
=
 
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
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
Y
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
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
Y
'
 
]
 
=
 
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
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
Y
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
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
W
E
E
K
D
A
Y
S
_
S
U
N
D
A
Y
'
 
]
 
=
 
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
W
E
E
K
D
A
Y
S
_
S
U
N
D
A
Y
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
W
E
E
K
D
A
Y
S
_
S
U
N
D
A
Y
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
W
E
E
K
D
A
Y
S
_
M
O
N
D
A
Y
_
A
B
B
R
'
 
]
 
=
 
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
W
E
E
K
D
A
Y
S
_
M
O
N
D
A
Y
_
A
B
B
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
R
_
W
E
E
K
D
A
Y
S
_
M
O
N
D
A
Y
_
A
B
B
R
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
W
E
E
K
D
A
Y
S
_
T
U
E
S
D
A
Y
_
A
B
B
R
'
 
]
 
=
 
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
W
E
E
K
D
A
Y
S
_
T
U
E
S
D
A
Y
_
A
B
B
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
R
_
W
E
E
K
D
A
Y
S
_
T
U
E
S
D
A
Y
_
A
B
B
R
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
W
E
E
K
D
A
Y
S
_
W
E
D
N
E
S
D
A
Y
_
A
B
B
R
'
 
]
 
=
 
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
W
E
E
K
D
A
Y
S
_
W
E
D
N
E
S
D
A
Y
_
A
B
B
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
R
_
W
E
E
K
D
A
Y
S
_
W
E
D
N
E
S
D
A
Y
_
A
B
B
R
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
A
Y
_
A
B
B
R
'
 
]
 
=
 
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
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
A
Y
_
A
B
B
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
R
_
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
A
Y
_
A
B
B
R
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
Y
_
A
B
B
R
'
 
]
 
=
 
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
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
Y
_
A
B
B
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
R
_
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
Y
_
A
B
B
R
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
Y
_
A
B
B
R
'
 
]
 
=
 
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
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
Y
_
A
B
B
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
R
_
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
Y
_
A
B
B
R
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
W
E
E
K
D
A
Y
S
_
S
U
N
D
A
Y
_
A
B
B
R
'
 
]
 
=
 
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
W
E
E
K
D
A
Y
S
_
S
U
N
D
A
Y
_
A
B
B
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
R
_
W
E
E
K
D
A
Y
S
_
S
U
N
D
A
Y
_
A
B
B
R
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
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
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
'
,
 
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
N
O
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
N
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
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
1
'
,
 
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
Y
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
C
O
M
_
M
R
_
Y
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
o
u
t
p
u
t
[
'
D
E
P
O
S
I
T
_
P
A
I
D
'
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
o
p
t
i
o
n
s
,
 
'
d
e
p
o
s
i
t
_
p
a
i
d
'
,
 
'
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
 
s
p
a
n
1
2
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
'
2
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
B
O
O
K
E
D
_
I
N
'
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
o
p
t
i
o
n
s
,
 
'
b
o
o
k
e
d
_
i
n
'
,
 
'
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
 
s
p
a
n
1
2
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
'
2
'
)
;


 
 
 
 
 
 
 
 
/
/
g
e
t
 
t
h
e
 
c
u
r
r
e
n
c
y
 
c
o
d
e

 
 
 
 
 
 
 
 
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
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
)
)
 
{
 
/
/
 
f
o
r
 
v
4
.
5
 
c
o
n
v
e
r
t
i
n
g
 
t
h
e
 
o
l
d
 
c
u
r
r
e
n
c
y
C
o
d
e
 
v
a
l
u
e
 
t
o
 
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e

 
 
 
 
 
 
 
 
 
 
 
 
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
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
 
=
 
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
c
u
r
r
e
n
c
y
C
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
 
=
=
 
'
'
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
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
 
=
 
'
G
B
P
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
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
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
;


 
 
 
 
 
 
 
 
i
f
 
(
$
j
r
C
o
n
f
i
g
[
 
'
u
s
e
G
l
o
b
a
l
C
u
r
r
e
n
c
y
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
u
r
r
e
n
c
y
c
o
d
e
 
=
 
$
j
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
l
o
b
a
l
C
u
r
r
e
n
c
y
C
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
C
U
R
R
E
N
C
Y
_
C
O
D
E
'
]
 
=
 
$
c
u
r
r
e
n
c
y
c
o
d
e
;

	
	

	
	
/
/
c
h
e
c
k
 
i
f
 
s
i
t
e
 
i
s
 
R
T
L

	
	
i
f
 
(
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
i
s
R
t
l
(
)
)
 
{

	
	
	
$
o
u
t
p
u
t
[
'
I
S
_
R
T
L
'
]
 
=
 
'
t
r
u
e
'
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
o
u
t
p
u
t
[
'
I
S
_
R
T
L
'
]
 
=
 
'
f
a
l
s
e
'
;

	
	
}


 
 
 
 
 
 
 
 
/
/
e
x
i
s
t
i
n
g
 
g
u
e
s
t
s
 
d
r
o
p
d
o
w
n

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
E
X
I
S
T
I
N
G
_
G
U
E
S
T
S
_
D
R
O
P
D
O
W
N
'
]
 
=
 
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
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
G
U
E
S
T
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
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
G
U
E
S
T
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
E
X
I
S
T
I
N
G
_
G
U
E
S
T
S
_
D
R
O
P
D
O
W
N
'
]
 
=
 
$
t
h
i
s
-
>
g
e
t
E
x
i
s
t
i
n
g
G
u
e
s
t
s
D
r
o
p
d
o
w
n
(
$
p
r
o
p
e
r
t
y
_
u
i
d
)
;


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
B
A
C
K
E
N
D
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
r
o
w
s
'
,
 
$
r
o
w
s
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
d
a
s
h
b
o
a
r
d
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
o
u
t
p
u
t
_
n
o
w
)
 
{

	
	
	
$
t
m
p
l
-
>
d
i
s
p
l
a
y
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

	
	
}

 
 
 
 
}


 
 
 
 
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
E
x
i
s
t
i
n
g
G
u
e
s
t
s
D
r
o
p
d
o
w
n
(
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
r
_
u
s
e
r
'
)
;


 
 
 
 
 
 
 
 
$
d
r
o
p
D
o
w
n
L
i
s
t
 
=
 
'
'
;


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 

	
	
	
	
	
	
`
g
u
e
s
t
s
_
u
i
d
`
,

	
	
	
	
	
	
`
s
u
r
n
a
m
e
`
,

	
	
	
	
	
	
`
f
i
r
s
t
n
a
m
e
`
 
 

	
	
	
	
	
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 

	
	
	
	
	
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
I
N
 
(
'
 
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
t
h
i
s
J
R
U
s
e
r
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
.
'
)
 
 

	
	
	
	
	
O
R
D
E
R
 
B
Y
 
s
u
r
n
a
m
e
'
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
C
u
s
t
o
m
e
r
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
$
e
c
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
e
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
c
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
'
,
 
'
&
n
b
s
p
;
'
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
e
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
s
 
a
s
 
$
c
u
s
t
o
m
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
c
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
c
u
s
t
o
m
e
r
-
>
g
u
e
s
t
s
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
c
u
s
t
o
m
e
r
-
>
s
u
r
n
a
m
e
)
.
'
 
'
.
s
t
r
i
p
s
l
a
s
h
e
s
(
$
c
u
s
t
o
m
e
r
-
>
f
i
r
s
t
n
a
m
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
d
r
o
p
D
o
w
n
L
i
s
t
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
e
c
,
 
'
e
x
i
s
t
i
n
g
G
u
e
s
t
s
'
,
 
'
 
s
i
z
e
=
"
1
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
-
m
e
d
i
u
m
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
'
0
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
d
r
o
p
D
o
w
n
L
i
s
t
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
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
;

 
 
 
 
}

}

