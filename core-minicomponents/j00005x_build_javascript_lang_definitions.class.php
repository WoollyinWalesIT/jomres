
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


/
/
 
T
h
i
s
 
s
c
r
i
p
t
 
w
i
l
l
 
b
u
i
l
d
 
l
a
n
g
u
a
g
e
 
d
e
f
i
n
i
t
i
o
n
 
s
c
r
i
p
t
s
 
f
o
r
 
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
 
f
i
l
e
s
 
t
h
a
t
 
n
e
e
d
 
t
o
 
b
e
 
c
a
l
l
e
d
 
A
F
T
E
R
 
a
l
l
 
o
f
 
t
h
e
 
o
t
h
e
r
 
l
a
n
g
u
a
g
e
 
f
i
l
e
s
 
h
a
v
e
 
b
e
e
n
 
r
e
a
d
 
i
n
.


c
l
a
s
s
 
j
0
0
0
0
5
x
_
b
u
i
l
d
_
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
_
l
a
n
g
_
d
e
f
i
n
i
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


 
 
 
 
 
 
 
 
i
f
 
(
A
J
A
X
C
A
L
L
 
=
=
 
'
1
'
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
l
s
 
=
 
j
o
m
r
e
s
G
e
t
D
o
m
a
i
n
(
)
;

 
 
 
 
 
 
 
 
$
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
_
f
i
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
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
 
=
 
'
t
r
u
e
'
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
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
'
]
 
=
=
 
'
0
'
 
|
|
 
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
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
 
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
a
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
s
i
t
e
p
a
g
e
_
u
r
l
_
a
j
a
x
 
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
D
M
I
N
_
A
J
A
X
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
s
i
t
e
p
a
g
e
_
u
r
l
_
a
j
a
x
 
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
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
m
i
s
c
_
u
r
l
_
d
e
f
s
 
=
 
'

	
	
	
v
a
r
 
l
i
v
e
_
s
i
t
e
_
a
j
a
x
 
=
 
"
'
.
$
j
o
m
r
e
s
_
s
i
t
e
p
a
g
e
_
u
r
l
_
a
j
a
x
.
'
"
;

	
	
	
v
a
r
 
c
o
m
p
a
r
e
_
u
r
l
 
=
 
"
'
.
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
N
O
S
E
F
.
'
&
t
a
s
k
=
c
o
m
p
a
r
e
'
.
'
"
;

	
	
	
v
a
r
 
p
a
t
h
_
t
o
_
j
o
m
r
e
s
_
d
i
r
 
=
 
"
'
.
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
l
i
v
e
_
s
i
t
e
'
)
.
'
"
;

	
	
	
v
a
r
 
m
o
d
u
l
e
_
p
o
p
_
a
j
a
x
_
u
r
l
 
=
 
"
'
.
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
m
o
d
u
l
e
_
p
o
p
u
p
&
n
o
f
o
l
l
o
w
t
m
p
l
=
1
&
i
d
=
"
;

	
	
	
'
;


 
 
 
 
 
 
 
 
$
t
e
m
p
l
a
t
e
_
d
i
r
 
=
 
f
i
n
d
_
p
l
u
g
i
n
_
t
e
m
p
l
a
t
e
_
d
i
r
e
c
t
o
r
y
(
)
;

 
 
 
 
 
 
 
 
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
a
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
 
&
&
 
$
t
e
m
p
l
a
t
e
_
d
i
r
 
!
=
 
'
j
q
u
e
r
y
_
u
i
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
 
!
=
 
'
j
o
o
m
l
a
4
'
)
 
{

	
	
	
	
$
t
e
m
p
l
a
t
e
_
d
i
r
 
=
 
'
b
o
o
t
s
t
r
a
p
'
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
t
e
m
p
l
a
t
e
_
d
i
r
 
=
 
'
b
o
o
t
s
t
r
a
p
4
'
;

	
	
	
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
m
i
s
c
_
u
r
l
_
d
e
f
s
 
.
=
 
'

	
	
	
v
a
r
 
j
o
m
r
e
s
_
t
e
m
p
l
a
t
e
_
v
e
r
s
i
o
n
 
=
 
"
'
.
$
t
e
m
p
l
a
t
e
_
d
i
r
.
'
"
;

	
	
	
v
a
r
 
p
r
o
p
e
r
t
y
_
r
e
v
i
e
w
s
_
a
j
a
x
_
u
r
l
 
=
 
"
'
.
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
s
h
o
w
_
p
r
o
p
e
r
t
y
_
r
e
v
i
e
w
s
&
n
o
f
o
l
l
o
w
t
m
p
l
=
1
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
"
;

	
	
	

	
	
	
v
a
r
 
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
 
=
 
"
'
 
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
"
;

	
	
	
v
a
r
 
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
 
=
 
'
 
.
$
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
.
'
;

	
	
	

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
E
m
p
t
y
T
a
b
l
e
	
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
E
M
P
T
Y
T
A
B
L
E
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
E
M
P
T
Y
T
A
B
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
.
'
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
I
n
f
o
	
	
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
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
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
I
n
f
o
E
m
p
t
y
	
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
E
M
P
T
Y
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
E
M
P
T
Y
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
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
I
n
f
o
F
i
l
t
e
r
e
d
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
F
I
L
T
E
R
E
D
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
F
I
L
T
E
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
.
'
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
I
n
f
o
P
o
s
t
F
i
x
	
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
P
O
S
T
F
I
X
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
P
O
S
T
F
I
X
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
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
I
n
f
o
T
h
o
u
s
a
n
d
s
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
T
H
O
U
S
A
N
D
S
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
T
H
O
U
S
A
N
D
S
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
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
L
e
n
g
t
h
M
e
n
u
	
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
L
E
N
G
T
H
M
E
N
U
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
L
E
N
G
T
H
M
E
N
U
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
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
L
o
a
d
i
n
g
R
e
c
o
r
d
s
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
L
O
A
D
I
N
G
R
E
C
O
R
D
S
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
L
O
A
D
I
N
G
R
E
C
O
R
D
S
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
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
P
r
o
c
e
s
s
i
n
g
	
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
P
R
O
C
E
S
S
I
N
G
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
P
R
O
C
E
S
S
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
.
'
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
S
e
a
r
c
h
	
	
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
S
E
A
R
C
H
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
S
E
A
R
C
H
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
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
Z
e
r
o
R
e
c
o
r
d
s
	
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
Z
E
R
O
R
E
C
O
R
D
S
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
Z
E
R
O
R
E
C
O
R
D
S
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
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
F
i
r
s
t
	
	
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
F
I
R
S
T
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
F
I
R
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
.
'
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
L
a
s
t
	
	
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
L
A
S
T
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
L
A
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
.
'
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
N
e
x
t
	
	
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
N
E
X
T
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
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
.
'
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
P
r
e
v
i
o
u
s
	
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
P
R
E
V
I
O
U
S
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
P
R
E
V
I
O
U
S
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
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
S
o
r
t
A
s
c
e
n
d
i
n
g
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
S
O
R
T
A
S
C
E
N
D
I
N
G
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
S
O
R
T
A
S
C
E
N
D
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
.
'
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
S
o
r
t
D
e
s
c
e
n
d
i
n
g
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
S
O
R
T
D
E
S
C
E
N
D
I
N
G
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
S
O
R
T
D
E
S
C
E
N
D
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
.
'
"
;

	
	
	
v
a
r
 
d
a
t
a
T
a
b
l
e
s
_
s
h
o
w
h
i
d
e
	
	
	
=
 
"
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
D
A
T
A
T
A
B
L
E
S
_
S
H
O
W
H
I
D
E
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
H
O
W
H
I
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
.
'
"
;


	
	
	
v
a
r
 
j
o
m
r
e
s
_
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
_
r
e
a
d
m
o
r
e
 
=
 
"
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
J
A
V
A
S
C
R
I
P
T
_
R
E
A
D
M
O
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
J
A
V
A
S
C
R
I
P
T
_
R
E
A
D
M
O
R
E
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
"
;

	
	
	
v
a
r
 
j
o
m
r
e
s
_
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
_
r
e
a
d
l
e
s
s
 
=
 
"
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
J
A
V
A
S
C
R
I
P
T
_
R
E
A
D
L
E
S
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
J
A
V
A
S
C
R
I
P
T
_
R
E
A
D
L
E
S
S
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
"
;

	
	
	
'
;


 
 
 
 
 
 
 
 
i
f
 
(
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
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
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
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
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
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
t
y
p
e
 
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
t
y
p
e
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
t
y
p
e
 
=
 
'
n
o
p
r
o
p
e
r
t
y
t
y
p
e
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
(
!
e
m
p
t
y
(
$
_
S
E
R
V
E
R
[
'
H
T
T
P
S
'
]
)
 
&
&
 
$
_
S
E
R
V
E
R
[
'
H
T
T
P
S
'
]
 
!
=
=
 
'
o
f
f
'
)
 
|
|
 
$
_
S
E
R
V
E
R
[
'
S
E
R
V
E
R
_
P
O
R
T
'
]
 
=
=
 
4
4
3
)
 
{
/
/
 
W
e
 
n
e
e
d
 
t
o
 
i
n
c
l
u
d
e
 
s
o
m
e
 
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
 
w
h
i
c
h
 
c
o
u
l
d
 
n
o
r
m
a
l
l
y
 
b
e
 
e
c
h
o
'
d
 
i
n
t
o
 
t
h
e
 
p
a
g
e
,
 
b
u
t
 
d
u
e
 
t
o
 
t
h
e
 
f
a
c
t
 
t
h
a
t
 
i
t
 
m
i
g
h
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
 
b
y
 
J
o
m
r
e
s
 
p
r
o
p
e
r
,
 
a
s
 
w
e
l
l
 
a
s
 
p
l
u
g
i
n
s
,
 
w
e
'
l
l
 
i
n
s
t
e
a
d
 
c
r
e
a
t
e
 
i
t
'
s
 
o
w
n
 
.
j
s
 
f
i
l
e
,
 
a
n
d
 
u
s
e
 
t
h
e
 
h
o
s
t
 
C
M
S
 
t
o
 
i
n
s
e
r
t
 
i
t
 
i
n
t
o
 
t
h
e
 
h
e
a
d
.

 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
_
f
i
l
e
 
=
 
$
l
s
.
'
_
s
s
l
_
'
.
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
l
a
n
g
'
)
.
'
_
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
t
y
p
e
.
'
_
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
_
f
i
l
e
 
=
 
$
l
s
.
'
_
'
.
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
l
a
n
g
'
)
.
'
_
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
t
y
p
e
.
'
_
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
a
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
_
f
i
l
e
 
.
=
 
'
_
m
i
s
c
_
u
r
l
_
d
e
f
s
_
a
d
m
i
n
.
j
s
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
_
f
i
l
e
 
.
=
 
'
_
m
i
s
c
_
u
r
l
_
d
e
f
s
.
j
s
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
!
f
i
l
e
_
e
x
i
s
t
s
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
_
A
B
S
P
A
T
H
.
$
t
e
m
p
_
f
i
l
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
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
_
A
B
S
P
A
T
H
.
$
t
e
m
p
_
f
i
l
e
,
 
$
m
i
s
c
_
u
r
l
_
d
e
f
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
T
r
i
e
d
 
t
o
 
w
r
i
t
e
 
 
'
.
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
_
A
B
S
P
A
T
H
.
$
t
e
m
p
_
f
i
l
e
.
'
 
b
u
t
 
w
a
s
 
n
o
t
 
s
u
c
c
c
e
s
s
f
u
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
t
e
m
p
/
'
,
 
$
t
e
m
p
_
f
i
l
e
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

