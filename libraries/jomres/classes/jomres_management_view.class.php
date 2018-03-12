
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
o
m
r
e
s
_
m
a
n
a
g
e
m
e
n
t
_
v
i
e
w

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
 
g
e
t
_
d
r
o
p
d
o
w
n
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
c
u
r
P
a
g
e
U
r
l
 
=
 
$
t
h
i
s
-
>
c
u
r
P
a
g
e
U
r
l
(
)
;


 
 
 
 
 
 
 
 
$
p
o
s
 
=
 
s
t
r
p
o
s
(
$
c
u
r
P
a
g
e
U
r
l
,
 
'
?
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
p
o
s
 
!
=
=
 
f
a
l
s
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
n
e
c
t
o
r
 
=
 
'
&
a
m
p
;
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
n
e
c
t
o
r
 
=
 
'
?
'
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
t
m
p
l
'
 
]
)
)
 
{

	
	
	
$
r
e
s
p
o
n
s
e
 
=
 
'
 
<
a
 
h
r
e
f
=
"
'
.
$
t
h
i
s
-
>
r
e
m
o
v
e
_
q
u
e
r
y
s
t
r
i
n
g
_
v
a
r
(
'
t
m
p
l
'
)
.
'
"
>
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
C
O
M
_
M
A
N
A
G
E
M
E
N
T
V
I
E
W
_
S
I
T
E
P
R
E
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
C
O
M
_
M
A
N
A
G
E
M
E
N
T
V
I
E
W
_
S
I
T
E
P
R
E
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
.
'
<
/
a
>
'
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
r
e
s
p
o
n
s
e
 
=
 
'
<
a
 
h
r
e
f
=
"
'
.
$
c
u
r
P
a
g
e
U
r
l
.
$
c
o
n
n
e
c
t
o
r
.
'
t
m
p
l
=
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
t
m
p
l
c
o
m
p
o
n
e
n
t
'
)
.
'
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
d
e
f
a
u
l
t
"
>
<
i
 
c
l
a
s
s
=
"
f
a
 
f
a
-
a
r
r
o
w
s
-
a
l
t
"
>
<
/
i
>
 
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
C
O
M
_
M
A
N
A
G
E
M
E
N
T
V
I
E
W
_
M
A
N
A
G
M
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
A
N
A
G
E
M
E
N
T
V
I
E
W
_
M
A
N
A
G
M
E
N
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
<
/
a
>
'
;

	
	
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
p
o
n
s
e
;

 
 
 
 
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
 
r
e
m
o
v
e
_
q
u
e
r
y
s
t
r
i
n
g
_
v
a
r
(
$
k
e
y
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
u
r
l
 
=
 
p
a
r
s
e
_
u
r
l
(
$
t
h
i
s
-
>
c
u
r
P
a
g
e
U
R
L
(
)
)
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
$
u
r
l
[
'
q
u
e
r
y
'
]
;


 
 
 
 
 
 
 
 
p
a
r
s
e
_
s
t
r
(
$
q
u
e
r
y
,
 
$
p
a
r
s
e
d
_
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
p
a
r
s
e
d
_
q
u
e
r
y
[
$
k
e
y
]
)
;


 
 
 
 
 
 
 
 
$
u
r
l
[
'
q
u
e
r
y
'
]
 
=
 
h
t
t
p
_
b
u
i
l
d
_
q
u
e
r
y
(
$
p
a
r
s
e
d
_
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
$
n
e
w
_
u
r
l
 
=
 
$
t
h
i
s
-
>
u
n
p
a
r
s
e
_
u
r
l
(
$
u
r
l
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
n
e
w
_
u
r
l
;

 
 
 
 
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
 
c
u
r
P
a
g
e
U
R
L
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
p
a
g
e
U
R
L
 
=
 
'
h
t
t
p
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
 
=
=
 
'
o
n
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
g
e
U
R
L
 
.
=
 
'
s
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
p
a
g
e
U
R
L
 
.
=
 
'
:
/
/
'
;

 
 
 
 
 
 
 
 
i
f
 
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
 
!
=
 
'
8
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
g
e
U
R
L
 
.
=
 
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
N
A
M
E
'
]
.
'
:
'
.
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
.
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
R
E
Q
U
E
S
T
_
U
R
I
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
a
g
e
U
R
L
 
.
=
 
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
N
A
M
E
'
]
.
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
R
E
Q
U
E
S
T
_
U
R
I
'
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
W
e
 
w
i
l
l
 
r
e
p
l
a
c
e
 
c
o
m
p
l
e
t
e
b
k
 
w
i
t
h
 
c
p
a
n
e
l
 
h
e
r
e
 
b
e
c
a
u
s
e
 
o
t
h
e
r
w
i
s
e
 
c
l
i
c
k
i
n
g
 
t
h
e
 
M
a
n
a
g
e
m
e
n
t
 
v
i
e
w
 
b
u
t
t
o
n
 
w
h
e
n
 
o
n
 
t
h
e
 
c
o
m
p
l
e
t
e
b
k
 
t
a
s
k
 
w
i
l
l
 
r
e
s
u
l
t
 
i
n
 
d
u
p
l
i
c
a
t
e
 
b
o
o
k
i
n
g
s
 
b
e
i
n
g
 
c
r
e
a
t
e
d
.

 
 
 
 
 
 
 
 
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
t
a
s
k
'
)
 
=
=
 
'
c
o
m
p
l
e
t
e
b
k
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
t
a
s
k
=
c
o
m
p
l
e
t
e
b
k
'
,
 
'
t
a
s
k
=
c
p
a
n
e
l
'
,
 
$
p
a
g
e
U
R
L
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
p
a
g
e
U
R
L
;

 
 
 
 
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
 
u
n
p
a
r
s
e
_
u
r
l
(
$
p
a
r
s
e
d
_
u
r
l
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
s
c
h
e
m
e
 
=
 
i
s
s
e
t
(
$
p
a
r
s
e
d
_
u
r
l
[
'
s
c
h
e
m
e
'
]
)
 
?
 
$
p
a
r
s
e
d
_
u
r
l
[
'
s
c
h
e
m
e
'
]
.
'
:
/
/
'
 
:
 
'
'
;

 
 
 
 
 
 
 
 
$
h
o
s
t
 
=
 
i
s
s
e
t
(
$
p
a
r
s
e
d
_
u
r
l
[
'
h
o
s
t
'
]
)
 
?
 
$
p
a
r
s
e
d
_
u
r
l
[
'
h
o
s
t
'
]
 
:
 
'
'
;

 
 
 
 
 
 
 
 
$
p
o
r
t
 
=
 
i
s
s
e
t
(
$
p
a
r
s
e
d
_
u
r
l
[
'
p
o
r
t
'
]
)
 
?
 
'
:
'
.
$
p
a
r
s
e
d
_
u
r
l
[
'
p
o
r
t
'
]
 
:
 
'
'
;

 
 
 
 
 
 
 
 
$
u
s
e
r
 
=
 
i
s
s
e
t
(
$
p
a
r
s
e
d
_
u
r
l
[
'
u
s
e
r
'
]
)
 
?
 
$
p
a
r
s
e
d
_
u
r
l
[
'
u
s
e
r
'
]
 
:
 
'
'
;

 
 
 
 
 
 
 
 
$
p
a
s
s
 
=
 
i
s
s
e
t
(
$
p
a
r
s
e
d
_
u
r
l
[
'
p
a
s
s
'
]
)
 
?
 
'
:
'
.
$
p
a
r
s
e
d
_
u
r
l
[
'
p
a
s
s
'
]
 
:
 
'
'
;

 
 
 
 
 
 
 
 
$
p
a
s
s
 
=
 
(
$
u
s
e
r
 
|
|
 
$
p
a
s
s
)
 
?
 
"
$
p
a
s
s
@
"
 
:
 
'
'
;

 
 
 
 
 
 
 
 
$
p
a
t
h
 
=
 
i
s
s
e
t
(
$
p
a
r
s
e
d
_
u
r
l
[
'
p
a
t
h
'
]
)
 
?
 
$
p
a
r
s
e
d
_
u
r
l
[
'
p
a
t
h
'
]
 
:
 
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
 
i
s
s
e
t
(
$
p
a
r
s
e
d
_
u
r
l
[
'
q
u
e
r
y
'
]
)
 
?
 
'
?
'
.
$
p
a
r
s
e
d
_
u
r
l
[
'
q
u
e
r
y
'
]
 
:
 
'
'
;

 
 
 
 
 
 
 
 
$
f
r
a
g
m
e
n
t
 
=
 
i
s
s
e
t
(
$
p
a
r
s
e
d
_
u
r
l
[
'
f
r
a
g
m
e
n
t
'
]
)
 
?
 
'
#
'
.
$
p
a
r
s
e
d
_
u
r
l
[
'
f
r
a
g
m
e
n
t
'
]
 
:
 
'
'
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
"
$
s
c
h
e
m
e
$
u
s
e
r
$
p
a
s
s
$
h
o
s
t
$
p
o
r
t
$
p
a
t
h
$
q
u
e
r
y
$
f
r
a
g
m
e
n
t
"
;

 
 
 
 
}

}

