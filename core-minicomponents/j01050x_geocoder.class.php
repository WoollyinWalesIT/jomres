
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
1
0
5
0
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
 
=
 
n
u
l
l
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
 
(
i
n
t
)
 
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


 
 
 
 
 
 
 
 
$
e
d
i
t
i
n
g
 
=
 
f
a
l
s
e
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
e
d
i
t
i
n
g
_
m
a
p
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
d
i
t
i
n
g
 
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
e
d
i
t
i
n
g
_
m
a
p
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
_
S
T
Y
L
E
'
]
 
=
 
f
i
l
e
_
g
e
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
A
S
S
E
T
S
_
A
B
S
P
A
T
H
.
'
m
a
p
_
s
t
y
l
e
s
'
.
J
R
D
S
.
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
m
a
p
_
s
t
y
l
e
'
]
.
'
.
s
t
y
l
e
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
Z
O
O
M
L
E
V
E
L
'
]
 
=
 
(
i
n
t
)
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
m
a
p
_
z
o
o
m
'
]
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
_
R
E
Q
U
E
S
T
[
'
m
a
p
_
z
o
o
m
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
[
'
Z
O
O
M
L
E
V
E
L
'
]
 
=
 
(
i
n
t
)
 
$
_
R
E
Q
U
E
S
T
[
'
m
a
p
_
z
o
o
m
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
M
A
P
T
Y
P
E
'
]
 
=
 
s
t
r
t
o
u
p
p
e
r
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
m
a
p
_
t
y
p
e
'
]
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
I
S
A
B
L
E
_
U
I
'
 
]
 
=
 
'
'
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
d
i
s
a
b
l
e
_
u
i
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
[
 
'
D
I
S
A
B
L
E
_
U
I
'
 
]
 
=
 
'
d
i
s
a
b
l
e
D
e
f
a
u
l
t
U
I
:
 
t
r
u
e
,
'
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
L
A
T
L
O
N
G
_
D
E
S
C
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
L
A
T
L
O
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
_
J
O
M
R
E
S
_
L
A
T
L
O
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
;


	
	
$
t
a
s
k
 
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
t
a
s
k
'
,
 
'
'
)
;

	
	
$
m
a
p
_
i
d
e
n
t
i
f
i
e
r
 
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
m
a
p
-
i
d
e
n
t
i
f
i
e
r
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
m
a
p
_
i
d
e
n
t
i
f
i
e
r
 
!
=
 
'
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
 
$
m
a
p
_
i
d
e
n
t
i
f
i
e
r
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
M
A
P
_
W
I
D
T
H
'
 
]
 
=
 
3
0
0
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
_
H
E
I
G
H
T
'
 
]
 
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
m
a
p
_
h
e
i
g
h
t
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
M
A
R
K
E
R
_
P
A
T
H
'
 
]
 
=
 
'
'
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
w
i
d
t
h
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
[
 
'
M
A
P
_
W
I
D
T
H
'
 
]
 
=
 
(
i
n
t
)
 
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
w
i
d
t
h
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
M
A
P
_
H
E
I
G
H
T
'
 
]
 
=
 
(
i
n
t
)
 
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
h
e
i
g
h
t
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
 
9
9
9
9
9
9
9
9
9
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
L
A
T
'
 
]
 
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
d
e
f
a
u
l
t
_
l
a
t
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
L
O
N
G
'
 
]
 
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
d
e
f
a
u
l
t
_
l
o
n
g
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
j
o
m
r
e
s
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
t
y
p
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
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
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
t
y
p
e
s
-
>
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
t
y
p
e
(
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
t
y
p
e
_
i
d
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
j
o
m
r
e
s
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
t
y
p
e
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
[
'
m
a
r
k
e
r
_
i
m
a
g
e
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
[
 
'
m
a
r
k
e
r
_
i
m
a
g
e
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
[
'
m
a
r
k
e
r
_
i
m
a
g
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
D
a
t
a
[
 
'
l
a
t
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
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
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
 
]
[
 
'
l
a
t
'
 
]
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
D
a
t
a
[
 
'
l
o
n
g
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
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
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
 
]
[
 
'
l
o
n
g
'
 
]
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
D
a
t
a
[
 
'
l
a
t
'
 
]
 
!
=
 
n
u
l
l
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
L
A
T
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
D
a
t
a
[
 
'
l
a
t
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
L
O
N
G
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
D
a
t
a
[
 
'
l
o
n
g
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
$
e
d
i
t
i
n
g
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
L
A
T
'
 
]
 
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
d
e
f
a
u
l
t
_
l
a
t
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
L
O
N
G
'
 
]
 
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
d
e
f
a
u
l
t
_
l
o
n
g
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
I
f
 
w
e
'
r
e
 
e
d
i
t
i
n
g
 
i
t
'
s
 
o
k
 
t
o
 
u
s
e
 
t
h
e
 
d
e
f
a
u
l
t
 
d
a
t
a
.
 
I
f
 
w
e
'
r
e
 
n
o
t
,
 
i
t
 
i
s
n
'
t
 
a
n
d
 
i
t
'
s
 
b
e
s
t
 
t
o
 
s
i
m
p
l
y
 
n
o
t
 
s
h
o
w
 
t
h
e
 
m
a
p
 
a
t
 
a
l
l

 
 
 
 
 
 
 
 
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
m
a
p
_
l
a
y
e
r
_
t
r
a
n
s
i
t
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
m
a
p
_
l
a
y
e
r
_
t
r
a
n
s
i
t
'
 
]
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
g
m
a
p
_
l
a
y
e
r
_
t
r
a
n
s
i
t
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
T
R
A
N
S
I
T
_
L
A
Y
E
R
'
 
]
 
=
 
'

	
	
	
	
v
a
r
 
t
r
a
n
s
i
t
L
a
y
e
r
 
=
 
n
e
w
 
g
o
o
g
l
e
.
m
a
p
s
.
T
r
a
n
s
i
t
L
a
y
e
r
(
)
;

	
	
	
	
t
r
a
n
s
i
t
L
a
y
e
r
.
s
e
t
M
a
p
(
m
a
p
)
;

	
	
	
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
g
m
a
p
_
p
o
i
s
'
 
]
 
=
=
 
'
0
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
S
U
P
P
R
E
S
S
_
P
O
I
S
'
 
]
 
=
 
'

	
	
	
,

	
	
s
t
y
l
e
s
:
[
{

	
	
	
f
e
a
t
u
r
e
T
y
p
e
:
"
p
o
i
"
,

	
	
	
e
l
e
m
e
n
t
T
y
p
e
:
"
l
a
b
e
l
s
"
,

	
	
	
s
t
y
l
e
r
s
:
[
{

	
	
	
	
v
i
s
i
b
i
l
i
t
y
:
"
o
f
f
"

	
	
	
	
}
]

	
	
	
}
]

	
	
	
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
e
d
i
t
i
n
g
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
D
R
A
G
A
B
L
E
'
 
]
 
=
 
'
,

	
	
d
r
a
g
g
a
b
l
e
:
 
t
r
u
e
,
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
D
R
A
G
_
L
I
S
T
E
N
E
R
'
 
]
 
=
 
'

	
	

	
	
v
a
r
 
p
o
s
t
c
o
d
e
I
n
p
u
t
 
=
 
d
o
c
u
m
e
n
t
.
g
e
t
E
l
e
m
e
n
t
B
y
I
d
(
\
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
p
o
s
t
c
o
d
e
\
'
)
;

	
	
v
a
r
 
t
o
w
n
I
n
p
u
t
 
=
 
d
o
c
u
m
e
n
t
.
g
e
t
E
l
e
m
e
n
t
B
y
I
d
(
\
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
s
t
r
e
e
t
\
'
)
;

	
	
v
a
r
 
s
t
r
e
e
t
I
n
p
u
t
 
=
 
d
o
c
u
m
e
n
t
.
g
e
t
E
l
e
m
e
n
t
B
y
I
d
(
\
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
t
o
w
n
\
'
)
;


	
	

	
	
g
o
o
g
l
e
.
m
a
p
s
.
e
v
e
n
t
.
a
d
d
D
o
m
L
i
s
t
e
n
e
r
(
p
o
s
t
c
o
d
e
I
n
p
u
t
,
 
\
'
c
h
a
n
g
e
\
'
,
 
f
u
n
c
t
i
o
n
(
)
 
{

	
	
	
v
a
r
 
a
d
d
r
e
s
s
 
=
 
b
u
i
l
d
_
a
d
d
r
e
s
s
(
)
;

	
	
	
i
f
 
(
a
d
d
r
e
s
s
 
!
=
 
"
"
)
 
{

	
	
	
	
c
o
d
e
A
d
d
r
e
s
s
(
a
d
d
r
e
s
s
)
;

	
	
	
	
}

	
	
	
}
)
;

	
	
g
o
o
g
l
e
.
m
a
p
s
.
e
v
e
n
t
.
a
d
d
D
o
m
L
i
s
t
e
n
e
r
(
t
o
w
n
I
n
p
u
t
,
 
\
'
c
h
a
n
g
e
\
'
,
 
f
u
n
c
t
i
o
n
(
)
 
{

	
	
	
v
a
r
 
a
d
d
r
e
s
s
 
=
 
b
u
i
l
d
_
a
d
d
r
e
s
s
(
)
;

	
	
	
i
f
 
(
a
d
d
r
e
s
s
 
!
=
 
"
"
)
 
{

	
	
	
	
c
o
d
e
A
d
d
r
e
s
s
(
a
d
d
r
e
s
s
)
;

	
	
	
	
}

	
	
	
}
)
;

	
	
g
o
o
g
l
e
.
m
a
p
s
.
e
v
e
n
t
.
a
d
d
D
o
m
L
i
s
t
e
n
e
r
(
s
t
r
e
e
t
I
n
p
u
t
,
 
\
'
c
h
a
n
g
e
\
'
,
 
f
u
n
c
t
i
o
n
(
)
 
{

	
	
	
v
a
r
 
a
d
d
r
e
s
s
 
=
 
b
u
i
l
d
_
a
d
d
r
e
s
s
(
)
;

	
	
	
i
f
 
(
a
d
d
r
e
s
s
 
!
=
 
"
"
)
 
{

	
	
	
	
c
o
d
e
A
d
d
r
e
s
s
(
a
d
d
r
e
s
s
)
;

	
	
	
	
}

	
	
	
}
)
;

	
	
	

	
	
	
u
p
d
a
t
e
M
a
r
k
e
r
P
o
s
i
t
i
o
n
(
l
a
t
L
n
g
)
;

	
	
	
g
o
o
g
l
e
.
m
a
p
s
.
e
v
e
n
t
.
a
d
d
L
i
s
t
e
n
e
r
(
m
a
r
k
e
r
,
 
\
'
d
r
a
g
\
'
,
 
f
u
n
c
t
i
o
n
(
)
 
{

	
	
	
u
p
d
a
t
e
M
a
r
k
e
r
P
o
s
i
t
i
o
n
(
m
a
r
k
e
r
.
g
e
t
P
o
s
i
t
i
o
n
(
)
)
;

	
	
	
}
)
;

	
	
	
g
o
o
g
l
e
.
m
a
p
s
.
e
v
e
n
t
.
a
d
d
L
i
s
t
e
n
e
r
(
m
a
r
k
e
r
,
 
\
'
d
r
a
g
e
n
d
\
'
,
 
f
u
n
c
t
i
o
n
(
)
 
{

	
	
	
m
a
p
.
s
e
t
C
e
n
t
e
r
(
m
a
r
k
e
r
.
g
e
t
P
o
s
i
t
i
o
n
(
)
)
;

	
	
	
}
)
;

	
	
	
	
'
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
e
f
i
n
e
d
(
'
U
P
D
A
T
E
_
P
O
S
I
T
I
O
N
_
F
U
N
C
T
I
O
N
_
E
X
I
S
T
S
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
U
P
D
A
T
E
_
P
O
S
I
T
I
O
N
_
F
U
N
C
T
I
O
N
_
E
X
I
S
T
S
'
,
 
1
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
U
P
D
A
T
E
M
A
R
K
E
R
P
O
S
I
T
I
O
N
'
 
]
 
=
 
"
f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
M
a
r
k
e
r
P
o
s
i
t
i
o
n
(
l
a
t
L
n
g
)
 
{

	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
'
#
l
a
t
'
)
.
v
a
l
(
l
a
t
L
n
g
.
l
a
t
(
)
.
t
o
F
i
x
e
d
(
7
)
)
;

	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
'
#
l
n
g
'
)
.
v
a
l
(
l
a
t
L
n
g
.
l
n
g
(
5
)
.
t
o
F
i
x
e
d
(
7
)
)
;

	
	
	
	
	
}
"
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
'
c
u
r
r
e
n
t
_
m
a
p
_
i
d
e
n
t
i
f
i
e
r
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
g
e
o
c
o
d
e
r
_
l
a
t
l
o
n
g
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

