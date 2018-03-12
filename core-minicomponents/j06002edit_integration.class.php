
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
2
e
d
i
t
_
i
n
t
e
g
r
a
t
i
o
n
 
{

 
 
 
 
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


 
 
 
 
 
 
 
 
$
f
o
u
n
d
_
w
e
b
h
o
o
k
_
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
 
=
 
a
r
r
a
y
(
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
'
0
7
3
0
0
'
]
 
a
s
 
$
e
v
e
n
t
N
a
m
e
 
=
>
 
$
e
v
e
n
t
D
e
t
a
i
l
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
$
f
o
u
n
d
_
w
e
b
h
o
o
k
_
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
[
]
=
$
e
v
e
n
t
N
a
m
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
f
o
u
n
d
_
w
e
b
h
o
o
k
_
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
)
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
"
E
r
r
o
r
:
 
O
o
p
s
,
 
y
o
u
 
c
a
n
'
t
 
c
r
e
a
t
e
 
a
 
n
e
w
 
W
e
b
h
o
o
k
 
i
n
t
e
g
r
a
t
i
o
n
 
u
n
t
i
l
 
y
o
u
'
v
e
 
i
n
s
t
a
l
l
e
d
 
a
t
 
l
e
a
s
t
 
o
n
e
 
w
e
b
h
o
o
k
 
i
n
t
e
g
r
a
t
i
o
n
 
m
e
t
h
o
d
/
p
l
u
g
i
n
"
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
"
w
e
b
h
o
o
k
s
"
)
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
s
 
=
 
n
e
w
 
w
e
b
h
o
o
k
s
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
i
d
)
;

 
 
 
 
 
 
 
 
$
a
l
l
_
w
e
b
h
o
o
k
s
 
=
 
$
w
e
b
h
o
o
k
s
-
>
g
e
t
_
a
l
l
_
w
e
b
h
o
o
k
s
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
i
n
t
e
g
r
a
t
i
o
n
_
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
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
E
D
I
T
'
,
 
'
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
E
D
I
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
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
U
R
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
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
U
R
L
'
,
 
'
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
U
R
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
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
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
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
I
D
'
,
 
'
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
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
W
E
B
H
O
O
K
S
_
A
U
T
H
_
M
E
T
H
O
D
_
S
E
L
E
C
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
W
E
B
H
O
O
K
S
_
A
U
T
H
_
M
E
T
H
O
D
_
S
E
L
E
C
T
'
,
 
'
W
E
B
H
O
O
K
S
_
A
U
T
H
_
M
E
T
H
O
D
_
S
E
L
E
C
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

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
/
/
 
F
i
s
t
 
w
e
 
n
e
e
d
 
t
o
 
f
i
n
d
 
o
u
t
 
t
h
e
 
s
u
p
p
o
r
t
e
d
 
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
i
o
n
 
m
e
t
h
o
d
s

 
 
 
 
 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
7
3
0
0
'
)
;
 
 
/
/
 
A
s
 
t
h
e
 
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
i
o
n
 
m
e
t
h
o
d
s
 
a
r
e
n
'
t
 
r
e
l
e
v
e
n
t
 
t
o
 
f
r
o
n
t
 
o
r
 
b
a
c
k
e
n
d
 
t
h
e
y
 
a
r
e
 
n
u
m
b
e
r
e
d
 
i
n
 
t
h
e
 
0
7
0
0
0
s

 
 
 
 
 
 
 
 
$
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
i
o
n
_
m
e
t
h
o
d
s
 
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
i
o
n
_
m
e
t
h
o
d
s
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
a
l
l
_
w
e
b
h
o
o
k
s
[
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
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
[
'
I
N
T
E
G
R
A
T
I
O
N
_
I
D
'
]
 
 
 
=
 
$
a
l
l
_
w
e
b
h
o
o
k
s
[
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
]
[
'
i
d
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
U
R
L
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
a
l
l
_
w
e
b
h
o
o
k
s
[
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
]
[
'
s
e
t
t
i
n
g
s
'
]
[
'
u
r
l
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
U
T
H
M
E
T
H
O
D
'
]
 
 
 
 
 
 
 
=
 
$
a
l
l
_
w
e
b
h
o
o
k
s
[
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
]
[
'
s
e
t
t
i
n
g
s
'
]
[
'
a
u
t
h
m
e
t
h
o
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
o
u
t
p
u
t
[
'
I
N
T
E
G
R
A
T
I
O
N
_
I
D
'
]
 
 
 
=
 
'
0
'
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
U
R
L
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
h
t
t
p
s
:
/
/
'
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
f
o
u
n
d
_
w
e
b
h
o
o
k
_
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
 
a
s
 
$
p
l
u
g
i
n
)
 
{
 
/
/
 
W
e
 
d
o
n
'
t
 
k
n
o
w
 
w
h
i
c
h
 
p
l
u
g
i
n
 
t
h
e
 
a
d
m
i
n
 
h
a
s
 
i
n
s
t
a
l
l
e
d
,
 
w
e
'
l
l
 
s
e
a
r
c
h
 
a
l
l
 
t
h
e
 
0
7
3
0
0
 
s
c
r
i
p
t
s
 
f
o
u
n
d
 
a
n
d
 
e
x
t
r
a
c
t
 
a
 
f
i
l
e
n
a
m
e
 
t
h
e
n
 
s
e
t
 
t
h
a
t
 
a
s
 
d
e
f
a
u
l
t

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
U
T
H
M
E
T
H
O
D
'
]
 
 
 
 
 
 
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
"
w
e
b
h
o
o
k
s
_
a
u
t
h
_
m
e
t
h
o
d
_
"
 
,
 
"
"
 
,
 
$
p
l
u
g
i
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
$
a
u
t
h
M
e
t
h
o
d
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
i
o
n
_
m
e
t
h
o
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
 
$
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
i
o
n
_
m
e
t
h
o
d
s
 
a
s
 
$
m
e
t
h
o
d
 
)
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
u
t
h
M
e
t
h
o
d
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
$
m
e
t
h
o
d
[
'
p
l
u
g
i
n
'
]
,
 
$
m
e
t
h
o
d
[
'
p
l
u
g
i
n
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
A
U
T
H
M
E
T
H
O
D
S
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
a
u
t
h
M
e
t
h
o
d
s
,
 
'
a
u
t
h
m
e
t
h
o
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
"
 
 
o
n
c
h
a
n
g
e
=
g
e
t
_
a
u
t
h
_
f
o
r
m
(
t
h
i
s
.
v
a
l
u
e
)
;
 
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
U
T
H
M
E
T
H
O
D
'
]
 
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
U
T
H
_
F
O
R
M
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
2
'
,
 
'
a
j
a
x
_
w
e
b
h
o
o
k
s
_
b
u
i
l
d
_
a
u
t
h
_
f
o
r
m
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
i
n
t
e
g
r
a
t
i
o
n
_
i
d
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
I
N
T
E
G
R
A
T
I
O
N
_
I
D
'
]
,
 
'
a
u
t
h
_
m
e
t
h
o
d
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
A
U
T
H
M
E
T
H
O
D
'
]
)
)
;


 
 
 
 
 
 
 
 
$
j
r
t
b
a
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
o
m
r
e
s
_
t
o
o
l
b
a
r
'
 
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
 
 
=
 
$
j
r
t
b
a
r
-
>
s
t
a
r
t
T
a
b
l
e
(
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
 
'
c
a
n
c
e
l
'
,
 
j
o
m
r
e
s
U
R
L
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
 
"
&
t
a
s
k
=
w
e
b
h
o
o
k
s
_
c
o
r
e
"
 
)
,
 
'
'
 
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
 
'
s
a
v
e
'
,
 
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
,
 
'
s
a
v
e
_
i
n
t
e
g
r
a
t
i
o
n
'
 
)
;

 
 
 
 
 
 
 
 
i
f
 
(
 
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
 
!
=
 
'
'
 
)
 

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
 
'
d
e
l
e
t
e
'
,
 
j
o
m
r
e
s
U
R
L
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
 
"
&
t
a
s
k
=
d
e
l
e
t
e
_
i
n
t
e
g
r
a
t
i
o
n
&
i
d
=
"
.
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
.
"
&
n
o
_
h
t
m
l
=
1
"
 
)
,
 
'
'
 
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
e
n
d
T
a
b
l
e
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
J
O
M
R
E
S
T
O
O
L
B
A
R
'
 
]
 
=
 
$
j
r
t
b
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
e
d
i
t
_
i
n
t
e
g
r
a
t
i
o
n
.
h
t
m
l
'
 
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
