
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
0
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


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
a
d
d
_
g
m
a
p
s
_
s
o
u
r
c
e
(
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
u
i
d
 
=
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
i
d
'
,
 
0
)
;

 
 
 
 
 
 
 
 
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
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
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
,
 
0
)
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


 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
'
'
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
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
p
r
o
p
e
r
t
y
_
h
e
a
d
e
r
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
A
N
D
O
M
_
I
D
E
N
T
I
F
I
E
R
'
 
]
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
1
0
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
R
E
I
N
F
O
R
M
A
T
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
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
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
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
'
,
 
$
e
d
i
t
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
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
L
I
N
K
'
 
]
 
=
 
g
e
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


 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
s
c
r
i
p
t
i
o
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
S
C
R
I
P
T
I
O
N
'
]
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
6
0
0
0
'
,
 
'
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
d
e
s
c
r
i
p
t
i
o
n
'
,
 
a
r
r
a
y
(
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
 
=
>
 
f
a
l
s
e
,
 
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
 
=
>
 
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
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
F
E
A
T
U
R
E
S
'
]
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
6
0
0
0
'
,
 
'
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
f
e
a
t
u
r
e
s
'
,
 
a
r
r
a
y
(
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
 
=
>
 
f
a
l
s
e
,
 
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
 
=
>
 
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
r
o
o
m
 
t
y
p
e
s

 
 
 
 
 
 
 
 
 
 
 
 
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
o
u
t
p
u
t
[
'
R
O
O
M
_
T
Y
P
E
S
'
]
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
6
0
0
0
'
,
 
'
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
o
o
m
_
t
y
p
e
s
'
,
 
a
r
r
a
y
(
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
 
=
>
 
f
a
l
s
e
,
 
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
 
=
>
 
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
)
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
R
O
O
M
_
T
Y
P
E
S
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y
 
p
r
i
c
e
s
 
f
r
o
m

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
p
r
i
c
e
_
o
u
t
p
u
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
g
e
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
p
r
i
c
e
_
f
o
r
_
d
i
s
p
l
a
y
_
i
n
_
l
i
s
t
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

 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
I
C
E
_
P
R
E
_
T
E
X
T
'
 
]
 
 
=
 
$
p
r
i
c
e
_
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
_
T
E
X
T
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
I
C
E
_
P
R
I
C
E
'
 
]
 
 
 
 
 
=
 
$
p
r
i
c
e
_
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
I
C
E
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
I
C
E
_
P
O
S
T
_
T
E
X
T
'
 
]
 
=
 
$
p
r
i
c
e
_
o
u
t
p
u
t
[
 
'
P
O
S
T
_
T
E
X
T
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
c
a
l
e
n
d
a
r

 
 
 
 
 
 
 
 
 
 
 
 
/
*
$
t
h
i
s
_
t
a
s
k
 
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
"
t
a
s
k
"
)
;

 
 
 
 
 
 
 
 
 
 
 
 
s
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
"
t
a
s
k
"
,
 
"
r
e
m
o
t
e
a
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
"
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
 
'
0
6
0
0
0
'
,
 
'
r
e
m
o
t
e
a
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
'
,
a
r
r
a
y
(
"
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
"
=
>
 
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
 
"
r
e
t
u
r
n
_
c
a
l
e
n
d
a
r
"
 
=
>
 
t
r
u
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
C
A
L
E
N
D
A
R
'
 
]
 
=
 
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
m
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
D
a
t
a
[
 
'
0
6
0
0
0
'
 
]
[
 
'
r
e
m
o
t
e
a
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
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
s
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
"
t
a
s
k
"
,
 
$
t
h
i
s
_
t
a
s
k
)
;
*
/


 
 
 
 
 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
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
I
M
A
G
E
L
A
R
G
E
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
d
e
e
t
s
[
 
'
L
I
V
E
S
I
T
E
'
 
]
 
.
"
/
j
o
m
r
e
s
/
a
s
s
e
t
s
/
i
m
a
g
e
s
/
n
o
i
m
a
g
e
.
g
i
f
"
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
I
M
A
G
E
M
E
D
I
U
M
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
d
e
e
t
s
[
 
'
L
I
V
E
S
I
T
E
'
 
]
 
.
"
/
j
o
m
r
e
s
/
a
s
s
e
t
s
/
i
m
a
g
e
s
/
n
o
i
m
a
g
e
.
g
i
f
"
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
I
M
A
G
E
T
H
U
M
B
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
d
e
e
t
s
[
 
'
L
I
V
E
S
I
T
E
'
 
]
 
.
"
/
j
o
m
r
e
s
/
a
s
s
e
t
s
/
i
m
a
g
e
s
/
n
o
i
m
a
g
e
.
g
i
f
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
i
m
a
g
e
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
s
_
u
i
d
,
 
a
r
r
a
y
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
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
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
'
]
[
0
]
[
0
]
[
'
l
a
r
g
e
'
]
 
!
=
 
"
"
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
M
A
G
E
L
A
R
G
E
'
 
]
 
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
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
'
]
[
0
]
[
0
]
[
'
l
a
r
g
e
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
I
M
A
G
E
M
E
D
I
U
M
'
 
]
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
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
'
]
[
0
]
[
0
]
[
'
m
e
d
i
u
m
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
I
M
A
G
E
T
H
U
M
B
'
 
]
 
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
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
'
]
[
0
]
[
0
]
[
'
s
m
a
l
l
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
*
/


 
 
 
 
 
 
 
 
 
 
 
 
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
 
=
 
a
r
r
a
y
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
 
=
>
 
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
 
'
w
i
d
t
h
'
 
=
>
 
'
2
0
0
'
,
 
'
h
e
i
g
h
t
'
 
=
>
 
'
2
1
4
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
1
0
5
0
'
,
 
'
x
_
g
e
o
c
o
d
e
r
'
,
 
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
A
P
'
 
]
 
=
 
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
m
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
D
a
t
a
[
 
'
0
1
0
5
0
'
 
]
[
 
'
x
_
g
e
o
c
o
d
e
r
'
 
]
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
F
R
O
N
T
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
_
c
o
n
t
e
n
t
s
.
h
t
m
l
'
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

 
 
 
 
 
 
 
 
e
c
h
o
 
$
r
e
s
u
l
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
 
n
u
l
l
;

 
 
 
 
}

}

