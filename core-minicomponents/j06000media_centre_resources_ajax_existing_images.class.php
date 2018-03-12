
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
_
e
x
i
s
t
i
n
g
_
i
m
a
g
e
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
u
s
e
r
I
s
M
a
n
a
g
e
r
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
r
e
s
o
u
r
c
e
_
t
y
p
e
 
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
r
e
s
o
u
r
c
e
_
t
y
p
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
r
e
s
o
u
r
c
e
_
i
d
 
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
r
e
s
o
u
r
c
e
_
i
d
'
,
 
'
0
'
)
;

	
	

	
	
/
/
i
f
 
r
e
s
o
u
r
c
e
 
t
y
p
e
 
i
s
 
e
m
p
t
y
,
 
r
e
t
u
r
n

	
	
i
f
 
(
$
r
e
s
o
u
r
c
e
_
t
y
p
e
 
=
=
 
'
'
)

	
	
	
r
e
t
u
r
n
;

	
	

	
	
/
/
g
e
t
_
e
x
i
s
t
i
n
g
_
i
m
a
g
e
s
_
t
r
i
g
g
e
r

	
	
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
i
m
a
g
e
s
 
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
1
1
0
4
0
'
,
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
i
m
a
g
e
s
 
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
3
3
8
3
'
,
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
)
;

	
	
}


 
 
 
 
 
 
 
 
i
f
 
(
!
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
d
e
l
e
t
e
_
u
r
l
 
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
h
a
n
d
l
e
r
&
d
e
l
e
t
e
=
1
&
r
e
s
o
u
r
c
e
_
t
y
p
e
=
'
.
$
r
e
s
o
u
r
c
e
_
t
y
p
e
.
'
&
r
e
s
o
u
r
c
e
_
i
d
=
'
.
$
r
e
s
o
u
r
c
e
_
i
d
.
'
&
f
i
l
e
=
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
l
e
t
e
_
u
r
l
 
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
.
'
&
t
a
s
k
=
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
h
a
n
d
l
e
r
&
d
e
l
e
t
e
=
1
&
r
e
s
o
u
r
c
e
_
t
y
p
e
=
'
.
$
r
e
s
o
u
r
c
e
_
t
y
p
e
.
'
&
r
e
s
o
u
r
c
e
_
i
d
=
'
.
$
r
e
s
o
u
r
c
e
_
i
d
.
'
&
f
i
l
e
=
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
i
m
a
g
e
_
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
i
m
a
g
e
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
i
m
a
g
e
s
 
a
s
 
$
i
m
a
g
e
)
 
{

	
	
	
	
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
i
m
a
g
e
[
'
s
m
a
l
l
'
]
 
)
 
)
 
{

	
	
	
	
	
$
i
m
a
g
e
_
n
a
m
e
 
=
 
b
a
s
e
n
a
m
e
(
$
i
m
a
g
e
[
'
s
m
a
l
l
'
]
)
;


	
	
	
	
	
$
i
m
a
g
e
_
s
m
a
l
l
_
p
a
t
h
 
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
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
,
 
'
'
,
 
$
i
m
a
g
e
[
'
s
m
a
l
l
'
]
)
;

	
	
	
	
	
$
i
m
a
g
e
_
s
m
a
l
l
_
p
a
t
h
 
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
'
/
'
,
 
J
R
D
S
 
,
 
$
i
m
a
g
e
_
s
m
a
l
l
_
p
a
t
h
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
R
A
N
D
O
M
_
I
D
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
F
I
L
E
N
A
M
E
'
]
 
=
 
$
i
m
a
g
e
_
n
a
m
e
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
_
R
E
L
_
L
A
R
G
E
'
]
 
=
 
$
i
m
a
g
e
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


	
	
	
	
	
/
/
c
h
e
c
k
 
i
f
 
t
h
e
 
t
h
u
m
b
n
a
i
l
 
e
x
i
s
t
s

	
	
	
	
	
i
f
 
(
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
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
.
$
i
m
a
g
e
_
s
m
a
l
l
_
p
a
t
h
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
M
A
G
E
_
R
E
L
_
S
M
A
L
L
'
]
 
=
 
$
i
m
a
g
e
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
M
A
G
E
_
R
E
L
_
S
M
A
L
L
'
]
 
=
 
$
i
m
a
g
e
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
D
E
L
E
T
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
D
E
L
E
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
D
E
L
E
T
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
V
I
E
W
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
V
I
E
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
V
I
E
W
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
E
L
E
T
E
_
U
R
L
'
]
 
=
 
$
d
e
l
e
t
e
_
u
r
l
.
$
i
m
a
g
e
_
n
a
m
e
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
A
D
M
I
N
I
S
T
R
A
T
O
R
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

	
	
	
	
	
}

	
	
	
	
	
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
_
l
i
s
t
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
i
m
a
g
e
_
r
e
s
u
l
t
 
.
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
 
a
r
r
a
y
(
'
I
M
A
G
E
S
'
 
=
>
 
$
i
m
a
g
e
_
r
e
s
u
l
t
)
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
A
D
M
I
N
I
S
T
R
A
T
O
R
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

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
_
l
i
s
t
_
w
r
a
p
p
e
r
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
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
 
<
i
m
g
 
s
r
c
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
I
M
A
G
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
'
.
'
"
 
/
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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

