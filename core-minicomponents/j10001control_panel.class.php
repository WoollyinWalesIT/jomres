
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
1
0
0
0
1
c
o
n
t
r
o
l
_
p
a
n
e
l

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

 
 
 
 
 
 
 
 

	
	
/
/
 
W
a
r
n
i
n
g
s
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
s
 
g
e
n
e
r
a
t
e
d
 
b
y
 
p
l
u
g
i
n
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
1
3
1
0
0
'
)
;
 

	
	

	
	
$
p
l
u
g
i
n
_
w
a
r
n
i
n
g
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
"
p
l
u
g
i
n
_
w
a
r
n
i
n
g
s
"
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
p
l
u
g
i
n
_
w
a
r
n
i
n
g
s
)
)
 
{

	
	
	
$
w
a
r
n
i
n
g
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
p
l
u
g
i
n
_
w
a
r
n
i
n
g
s
 
a
s
 
$
a
l
e
r
t
 
)
 
{

	
	
	
	
$
w
a
r
n
i
n
g
 
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
w
a
r
n
i
n
g
[
'
P
L
U
G
I
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
 
$
a
l
e
r
t
;

	
	
	
	
$
w
a
r
n
i
n
g
s
[
]
 
=
 
$
w
a
r
n
i
n
g
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
_
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

	
	

	
	
/
/
 
P
l
u
g
i
n
 
m
a
n
a
g
e
r
 
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
L
U
G
I
N
_
M
A
N
A
G
E
R
_
C
H
E
C
K
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
1
6
0
0
0
'
,
 
'
p
l
u
g
i
n
_
m
a
n
a
g
e
r
_
c
h
e
c
k
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
)
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
J
O
M
R
E
S
_
W
A
R
N
I
N
G
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
1
6
0
0
0
'
,
 
'
j
o
m
r
e
s
_
w
a
r
n
i
n
g
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
)
)
;


 
 
 
 
 
 
 
 
/
/
l
i
s
t
 
p
r
o
p
e
r
t
i
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
P
R
O
P
E
R
T
I
E
S
_
T
A
B
L
E
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
1
6
0
0
0
'
,
 
'
l
i
s
t
p
r
o
p
e
r
t
i
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
s
h
o
w
_
a
s
_
p
a
n
e
l
'
 
=
>
 
t
r
u
e
)
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
 
n
e
w
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
J
O
M
R
E
S
_
N
E
W
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
1
6
0
0
0
'
,
 
'
j
o
m
r
e
s
_
n
e
w
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
)
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
 
s
y
s
t
e
m
 
i
n
f
o

 
 
 
 
 
 
 
 
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
_
S
Y
S
T
E
M
_
I
N
F
O
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
1
6
0
0
0
'
,
 
'
j
o
m
r
e
s
_
s
y
s
t
e
m
_
i
n
f
o
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
)
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
 
i
n
c
o
m
e
 
o
v
e
r
v
i
e
w

 
 
 
 
 
 
 
 
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
_
I
N
C
O
M
E
_
O
V
E
R
V
I
E
W
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
1
6
0
0
0
'
,
 
'
j
o
m
r
e
s
_
i
n
c
o
m
e
_
o
v
e
r
v
i
e
w
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
)
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
 
p
r
o
p
e
r
t
i
e
s
 
o
v
e
r
v
i
e
w

 
 
 
 
 
 
 
 
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
_
P
R
O
P
E
R
T
I
E
S
_
O
V
E
R
V
I
E
W
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
1
6
0
0
0
'
,
 
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
i
e
s
_
o
v
e
r
v
i
e
w
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
)
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
 
r
e
v
i
e
w
s
 
o
v
e
r
v
i
e
w

 
 
 
 
 
 
 
 
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
_
R
E
V
I
E
W
S
_
O
V
E
R
V
I
E
W
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
1
6
0
0
0
'
,
 
'
j
o
m
r
e
s
_
r
e
v
i
e
w
s
_
o
v
e
r
v
i
e
w
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
)
)
;


 
 
 
 
 
 
 
 
/
/
b
o
o
k
i
n
g
s
 
c
h
a
r
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
B
O
O
K
I
N
G
S
_
C
H
A
R
T
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
1
6
0
0
0
'
,
 
'
c
h
a
r
t
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
h
e
i
g
h
t
'
=
>
 
3
0
0
)
)
;


 
 
 
 
 
 
 
 
/
/
c
o
m
m
i
s
s
i
o
n
s
 
c
h
a
r
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
C
O
M
M
I
S
S
I
O
N
S
_
C
H
A
R
T
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
1
6
0
0
0
'
]
[
'
c
h
a
r
t
_
c
o
m
m
i
s
s
i
o
n
'
]
)
 
&
&
 
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
u
s
e
_
c
o
m
m
i
s
s
i
o
n
'
]
 
=
=
 
1
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
C
O
M
M
I
S
S
I
O
N
S
_
C
H
A
R
T
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
1
6
0
0
0
'
,
 
'
c
h
a
r
t
_
c
o
m
m
i
s
s
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
h
e
i
g
h
t
'
=
>
 
3
0
0
)
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
s
u
b
s
c
r
i
p
t
i
o
n
s
 
c
h
a
r
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
S
U
B
S
C
R
I
P
T
I
O
N
S
_
C
H
A
R
T
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
1
6
0
0
0
'
]
[
'
c
h
a
r
t
_
s
u
b
s
c
r
i
p
t
i
o
n
s
'
]
)
 
&
&
 
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
u
s
e
S
u
b
s
c
r
i
p
t
i
o
n
s
'
]
 
=
=
 
1
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
B
S
C
R
I
P
T
I
O
N
S
_
C
H
A
R
T
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
1
6
0
0
0
'
,
 
'
c
h
a
r
t
_
s
u
b
s
c
r
i
p
t
i
o
n
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
h
e
i
g
h
t
'
=
>
 
3
0
0
)
)
;

 
 
 
 
 
 
 
 
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
w
a
r
n
i
n
g
s
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
l
u
g
i
n
_
w
a
r
n
i
n
g
s
'
,
 
$
w
a
r
n
i
n
g
s
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
c
o
n
t
r
o
l
_
p
a
n
e
l
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

